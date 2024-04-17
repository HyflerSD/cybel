<?php

namespace App\Service;
use App\Models\DegreeMap;
use App\Models\MapModel;
use App\Models\StudentHistory;
use App\Models\Term;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MapModelService
{
    /** @todo Add all functions pertainig to map data in this service, may create a Cybel app service to handle the
    http interactions with the api */
    public function existingMapModels()
    {
        $usersToInsert = [];
        try
        {
            //@todo add logic to get existing maps
        }catch(\Exception $e)
        {
            Log::error($e->getMessage());
        }
        return '';
    }

    public function prepareMapData(mixed $profile, bool $advisorGenerated, bool $genericMap = false) : array
    {
        $studentHistory = StudentHistory::where('user_id', $profile['user_id'])->get();
        $preparedProfile = [
            'user_id' => $profile['user_id'],
            'expected_graduation_date' => '',
            'time_of_day' => json_decode($profile['time_of_day'], true),
            'days_of_week' => json_decode($profile['days_of_week'], true),
            'interest_area' => $profile['interest_area'],
            'concentration_code' => $profile['concentration_code'],
            'mode_of_instruction' => $profile['mode_of_instruction'],
            'courses_per_semester' => $profile['courses_per_semester'],
        ];

        $preparedHistory = [];
        foreach ($studentHistory as $item) {
            if ($this->passed($item['grade'])) {
                $preparedHistory["courses"][] = $item['course_code'];
            }
        }
            $cybelData['data'] = [
            'campus_id' => $profile['campus_id'],
            'institution' => "MDC",
            'student_profile' => $preparedProfile,
            'student_history' => $preparedHistory,
            'generic' => $genericMap,
        ];
        return $cybelData;
    }
    public function passed(string $grade)
    {
       $passingGrades = ['A','B','C'];
       return in_array($grade, $passingGrades);
    }

   public function saveDegreeModel($modelData) : JsonResponse
   {
       $concentrationCode = $modelData['concentration'];
       $toDb['concentration_code'] = $concentrationCode;
       $toDb['institution'] = "MDC";
       $toDb['course_count'] = count($modelData['courses']);
       $toDb['effective_date'] = Carbon::now()->addYears(2);
       $coursesList = [];
       foreach ($modelData['courses'] as $course)
       {

           $coursesList[] = [
               "course_code" => $course['course_code'],
               "priority_index" => $course['priority_index'],
               "level_combination" => $course['level_combination'],
               "course_level" => $course['course_level'],
           ];
       }
       $toDb['courses'] = json_encode($coursesList, true);
       try
       {
           $existingModel = MapModel::where('concentration_code', $concentrationCode)->first();

           if ($existingModel) {
               $latestModel = MapModel::where('concentration_code', $concentrationCode)
                   ->orderBy('identifier_key', 'desc')
                   ->first();

               $newIdentifierKey = $latestModel->identifier_key + 1;
           } else {
               $newIdentifierKey = 1;
           }
           $toDb['identifier_key'] = (int)$newIdentifierKey;
           MapModel::create($toDb);
           $toDb['courses'] = $coursesList;
           return response()->json(['data' => $toDb]);
       } catch (\Exception $e)
       {
           Log::error($e);
           Log::error($e->getMessage());
       }
       return response()->json(['message' => 'Error Saving Model']);
   }

    public function prepareGenericMapData(int $studentID, string $concentrationCode, int $campusID) : array
    {
        $preparedHistory['courses'] = [];
        $preparedProfile = [
            'user_id' => $studentID,
            'expected_graduation_date' => '',
            'concentration_code' => $concentrationCode,
        ];

        $studentHistory = StudentHistory::where('user_id', $studentID)->get();
        foreach ($studentHistory as $item)
        {
            $preparedHistory['courses'][] = [
                'course_code' => $item['course_code'],
            ];
        }
        $cybelData['data'] = [
            'campus_id' => $campusID,
            'institution' => "MDC",
            'student_profile' => $preparedProfile,
            'student_history' => $preparedHistory,
            'generic' => true,
        ];
        return $cybelData;
    }

    public function prepMapForDB(array $mapData, mixed $studentProfile) : array
    {
        $sCount = count($mapData);
        $semesters = $this->getNextSemesters($sCount);
        $studentProfileBuild = [];
        foreach ($mapData as $semester)
        {
            $idx = 0;
            foreach ($semester as $course)
            {
                $studentProfileBuild[] = [
                    "term_code" => $semesters[$idx],
                    "user_id" => $studentProfile['user_id'],
//                    "time_of_day" => $studentProfile['time_of_day'] ?? "none",
//                    "days_of_week" => $studentProfile['days_of_week'] ?? "",
                    "concentration_code" => $studentProfile['concentration_code'],
//                    "mode_of_instruction" => $studentProfile['mode_of_instruction'] ?? "none",
                    "campus_id" => $studentProfile['campus_id'],
                    'course_code' => $course,
                    'updated_by' => "system"
                ];
                $idx++;
            }
        }
        return $studentProfileBuild;
    }
    public function saveStudentMap(mixed $mapData) : void
    {
        $decodedMap = json_decode($mapData->data, true);
        $origStudentData = (array) $mapData->student_profile;
        $origStudentData['campus_id'] = $mapData->campus_id;
        $preparedData = $this->prepMapForDB($decodedMap, $origStudentData);


        try
        {
            DB::table("degree_maps")->insert($preparedData);
        }catch (\Exception $e)
        {
            Log::error($e);
            Log::error($e->getMessage());
        }

    }

    private function getNextSemesters(int $count) : array
    {
        $sMap = [
            "spring" => ["january", "february", "march", "april"],
            "summer" => ["may", "june", "july", "august"],
            "fall" => ["september", "october", "november", "december"],
        ];

        $nextSemesterMap = [
            "spring" => "summer",
            "summer" => "fall",
            "fall" => "spring"
        ];

        $currentMonth = strtolower(Carbon::now()->format('F'));
        $currentYear = Carbon::now()->format('Y');

        $currentSemester = null;
        foreach ($sMap as $semester => $months) {
            if (in_array($currentMonth, $months)) {
                $currentSemester = $semester;
                break;
            }
        }

        $semesters = [];
        if ($currentSemester) {
            $semester = $nextSemesterMap[$currentSemester];
            for ($i = 0; $i < $count; $i++) {
                if ($semester == 'spring' && $currentSemester == 'fall') {
                    $currentYear++;
                }
                $semesters[] = $semester . '_' . $currentYear;
                $currentSemester = $semester;
                $semester = $nextSemesterMap[$semester];
            }
        }

        return $semesters;
    }


}
