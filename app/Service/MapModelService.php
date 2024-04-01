<?php

namespace App\Service;
use App\Models\MapModel;
use Carbon\Carbon;
use Cassandra\Map;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use League\Csv\Reader;

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

    public function prepareMapData(mixed $profile, bool $advisorGenerated, bool $genericMap = false) : RedirectResponse
    {
        $cybelData['data'] = [
           'student_profile' => $profile,
           'generic' => $genericMap
        ];
        return redirect()
            ->route('admin.create-student-map-form')
            ->with(
                'success',
                'Successfully Generated Student Map'
            );
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
