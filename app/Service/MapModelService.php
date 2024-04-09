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

    public function prepareMapData(mixed $profile, bool $advisorGenerated, bool $genericMap = false) : array
    {
        $studentHistory = StudentHistory::where('user_id', $profile['user_id'])->get();
        $preparedHistory['courses'] = [];
        $preparedProfile = [
            'user_id' => $profile['user_id'],
//            'priority' => $profile['priority'], //TODO don't really need this going to the api , doesn't use it
            'expected_graduation_date' => '',
            'time_of_day' => json_decode($profile['time_of_day'], true),
            'days_of_week' => json_decode($profile['days_of_week'], true),
            'interest_area' => $profile['interest_area'],
            'concentration_code' => $profile['concentration_code'],
            'mode_of_instruction' => $profile['mode_of_instruction'],
            'courses_per_semester' => $profile['courses_per_semester'],
        ];


         /**
          * TODO: Only add courses where the student actually passed, create a function that checks for passing grade
          * Function must return a boolean
          * */
        foreach ($studentHistory as $item)
        {
            $preparedHistory['courses'][] = [
              'course_code' => $item['course_code'],
            ];
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
           //TODO send map model over to engine, will be via cronjob in the future
           $toDb['courses'] = $coursesList;
           $this->prepareMapModelData();
           return response()->json(['message' => 'Successfully Saved Model', 'data' => $toDb]);
       } catch (\Exception $e)
       {
           Log::error($e);
           Log::error($e->getMessage());
       }
       return response()->json(['message' => 'Error Saving Model']);
   }

   private function prepareMapModelData()
   {


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
}
