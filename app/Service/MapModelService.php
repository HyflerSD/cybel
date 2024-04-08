<?php

namespace App\Service;
use App\Models\MapModel;
use App\Models\StudentHistory;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
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

    public function prepareMapData(mixed $profile, bool $advisorGenerated, bool $genericMap = false) : string
    {
        $studentHistory = StudentHistory::where('user_id', $profile['user_id'])->get();
        $preparedHistory = [];
        $preparedProfile = [
            'user_id' => $profile['user_id'],
            'priority' => $profile['priority'],
            'expected_graduation_date' => '',
            'time_of_day' => $profile['time_of_day'],
            'days_of_week' => $profile['days_of_week'],
            'interest_area' => $profile['interest_area'],
            'concentration_code' => $profile['concentration_code'],
            'mode_of_instruction' => $profile['mode_of_instruction'],
            'courses_per_semester' => $profile['courses_per_semester'],
        ];


        /**
         * TODO: Only add courses where the student actually passed, create a function that checks for passing grade
         * Function must return a boolean
         * */
        foreach ($studentHistory as $item) {
            if ($this->passed($item['grade'])) {


                $preparedHistory['courses'][] = [
                    'course_code' => $item['course_code'],
                ];
            }
            $cybelData['data'] = [
                'campus_id' => $profile['campus_id'],
                'student_profile' => json_encode($preparedProfile, true),
                'student_history' => json_encode($preparedHistory, true),
                'generic' => $genericMap,
            ];
        }
            return json_encode($cybelData, true);
        }




    public function passed(string $grade)
    {
       $passingGrades = ['A','B','C'];
       return in_array($grade, $passingGrades);
    }

   public function saveDegreeModel($modelData) : JsonResponse
   {
       //TODO: Add total credits to model? hhhmmmm
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
               "level_combination" => json_encode($course['level_combination'], true),
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
           $toDb['identifier_key'] = $newIdentifierKey;
           MapModel::create($toDb);
           return response()->json(['message' => 'Successfully Saved Model', 'data' => $toDb], 201);
       } catch (\Exception $e)
       {
           Log::error($e);
           Log::error($e->getMessage());
       }
       return response()->json(['message' => 'Error Saving Model'], 418) ;
   }
}
