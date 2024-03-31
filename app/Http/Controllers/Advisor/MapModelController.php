<?php

namespace App\Http\Controllers\Advisor;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\StudentProfile;
use App\Service\CybelService;
use App\Service\MapModelService;
use App\Service\StudentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use function PHPUnit\Framework\isEmpty;

class MapModelController extends Controller
{
    public function __construct(
        protected MapModelService $mapModelService,
        protected StudentService $studentService,
        protected CybelService $cybelService,
    )
    {
    }


    public function approveStudentMap()
    {
        dd('approved');
    }

    public function generateMap(Request $request) : RedirectResponse
    {
        $user = Auth::user();
        $studentId =  $request->get('student_id');
        if($user->is_advisor)
        {
           return $this->adminGeneratedMap($studentId);
        }
        else
        {
            return $this->studentGeneratedMap($user->id);
        }
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
        $advisorId = Auth::user()->id;
        $students = $this->studentService->assignedStudents($advisorId);
        $studentMaps = [];
        return view('admin.advisee-maps', compact('studentMaps', 'students'));
    }

    public function index()
    {
        $courses = Course::all();
        $mapModels = $this->mapModelService->existingMapModels();
        return view('admin.models', compact('mapModels', 'courses'));
    }

    public function studentGeneratedMap(int $profilePriority) : RedirectResponse
    {
        $student = session('student');
        $hasProfile = $this->studentService->maxProfileCount($student->user_id);
        if(!$hasProfile)
        {
            return redirect()
                ->route('student.create-profile')
                ->with(
                    'error',
                    'You must create your student profile first. Please submit the form below'
                );
        }

        try
        {
            $profile = $this->studentService->getProfileByPriority($student->user_id, $profilePriority);
            if($profile)
            {
                $preparedData = $this->mapModelService->prepareMapData($profile, false);
                $response = $this->cybelService->generateMap($preparedData);
            }

        } catch (\Exception $e)
        {
            Log::error($e);
            Log::error($e->getMessage());
        }

        if($response)
        {
            return redirect()
                ->route('student.profile')
                ->with(
                    'success',
                    'Map Successfully Generated!'
                );
        }
        return redirect()
            ->route('student.profile')
            ->with(
                'error',
                'Error occurred while generated map. Please try again later'
            );
    }

    public function adminGeneratedMap($studentUserId) : RedirectResponse
    {
        $studentProfile = StudentProfile::where('user_id', $studentUserId)->where('priority', 1)->first();
        try
        {
            if(isEmpty($studentProfile))
            {
                //TODO if no profile, generate generic map
                $preparedData = $this->mapModelService->prepareMapData($studentProfile, true, true);
            }
            else
            {
                $preparedData = $this->mapModelService->prepareMapData($studentProfile, true);
            }

            $response = $this->cybelService->generateMap($preparedData);
            if($response)
            {
                return redirect()
                    ->route('admin.dashboard')
                    ->with(
                        'success',
                        'Map generated'
                    );
            }

        }catch (\Exception $e)
        {
            Log::error($e);
            Log::error($e->getMessage());
        }

        return redirect()
            ->route('admin.dashboard')
            ->with(
                'error',
                'Error, generating map'
            );

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
