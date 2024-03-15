<?php

namespace App\Http\Controllers\Advisor;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Service\ApiService;
use App\Service\MapModelService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MapModelController extends Controller
{
    public function __construct(protected ApiService $apiService){}

    public function index(MapModelService $mapModelService)
    {
        $mapModels = $mapModelService->existingMapModels();
        $courses = Course::all();
        return view('admin.models', compact('courses'));
    }

    public function storeMapModel(Request $request)
    {
        try
        {
            $courses = $request->all()['courses'];
            $toDb = [];
            foreach ($courses as $course) {
                $toDb[] = [
                    "course_code" => $course['course_code'],
                    "priority_index" => (int) $course['priority_index'],
                    "level_combination" => $course['level_combination'],
                    "concentration_code" => "S9501",
                    "institution" => "MDC",
                ];
            }

            $response = $this->apiService->generateModel($toDb);
            dd($response);

//            DB::table('map_models')->insert($toDb);

//            $mapService->saveMap($courses);
            //@todo need to add the service to handle this data, will not handle this in controller
            //Also need to reach out to the Cybel Engine  once the model is successfully created
            //to persist it there

        }catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e);
        }
    }
}
