<?php

namespace App\Http\Controllers\Advisor;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Service\MapModelService;
use App\Service\StudentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MapModelController extends Controller
{
    public function __construct(
        protected MapModelService $mapModelService,
        protected StudentService $studentService
    )
    {
    }


    public function createModel()
    {
        $courses = Course::all();
        return view('admin.create-model', compact('courses'));
    }

    public function createStudentMap()
    {
        $advisorId = Auth::user()->id;
        $students = $this->studentService->assignedStudents($advisorId);
        return view('admin.create-student-map', compact('students'));
    }
    public function adviseeMaps()
    {
        $studentMaps = [];
        return view('admin.advisee-maps', compact('studentMaps'));
    }

    public function index()
    {
        $courses = Course::all();
        $mapModels = $this->mapModelService->existingMapModels();
        return view('admin.models', compact('mapModels', 'courses'));
    }
    public function print(Request $request)
    {
        try
        {
            $courses = $request->all()['courses'];
            $toDb = [];
            foreach ($courses as $course)
            {
                $toDb[] = [
                    "course_code" => $course['course_code'],
                    "priority_index" => $course['priority_index'],
                    "level_combination" => json_encode($course['level_combination']),
//                    "course_type" => $course['course_type'],
//                    "course_level" => $course['course_level'],
                    "concentration_code" => "S9501",
                    "institution" => "MDC",
                ];
            }
            DB::table('map_models')->insert($toDb);
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
