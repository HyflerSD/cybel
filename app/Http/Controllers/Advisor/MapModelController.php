<?php

namespace App\Http\Controllers\Advisor;
use App\Http\Controllers\Controller;
use App\Models\Concentration;
use App\Models\Course;
use App\Models\MapModel;
use App\Models\StudentProfile;
use App\Service\CybelService;
use App\Service\MapModelService;
use App\Service\StudentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            return $this->studentGeneratedMap();
        }
    }
    public function createModel()
    {
        $courses = Course::all();
        $concentrations = Concentration::all();
        return view('admin.create-model', compact('courses', 'concentrations'));
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
        $degreeModels = MapModel::all();
        return view('admin.models', compact('degreeModels'));
    }

    public function studentGeneratedMap() : RedirectResponse
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
            $profile = $this->studentService->getProfileByPriority($student->user_id, 1);

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

        if($response->isSuccessful())
        {
            return redirect()
                ->route('student.profile')
                ->with(
                    'success',
                    'Map Successfully Generated!'
                );
        }
        return redirect()
            ->route('student.create-map')
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

            $response = $this->cybelService->generateMap($preparedData->content());
            if($response->isSuccessful())
            {
                return redirect()
                    ->route('admin.create-student-map-form')
                    ->with(
                        'success',
                        $response->getData()->message
                    );
            }

        }catch (\Exception $e)
        {
            Log::error($e);
            Log::error($e->getMessage());
        }

        return redirect()
            ->route('admin.create-student-map-form')
            ->with(
                'error',
                'Error, generating map'
            );

    }
    public function saveModel(Request $request)
    {
        try
        {
            $courses = $request->except('_token');
            $preparedData = $this->mapModelService->saveDegreeModel($courses);
            if($preparedData->status() == 201)
            {
                $response = $this->cybelService->syncDegreeModel($preparedData->content());
                if (!$response)
                {
                    Log::error("Failed to sync model to cybel engine.");
                }
                return redirect()
                    ->route('admin.models')
                    ->with(
                        'success',
                        'Successfully Saved Model'
                    );
            }
        }catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e);
        }
        return redirect()
            ->route('admin.create-model')
            ->with(
                'error',
                'Error Occurred Saving Model'
            );
    }

}
