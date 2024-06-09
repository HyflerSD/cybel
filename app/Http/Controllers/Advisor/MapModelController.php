<?php

namespace App\Http\Controllers\Advisor;
use App\Http\Controllers\Controller;
use App\Models\Advisor;
use App\Models\Campus;
use App\Models\Concentration;
use App\Models\Course;
use App\Models\DegreeMap;
use App\Models\MapModel;
use App\Models\PreRegistration;
use App\Models\StudentProfile;
use App\Service\CybelService;
use App\Service\MapModelService;
use App\Service\StudentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class MapModelController extends Controller
{
    public function __construct(
        protected MapModelService $mapModelService,
        protected StudentService $studentService,
        protected CybelService $cybelService,
    )
    {
    }


    public function approveStudentMap(Request $request)
    {
        $mapId = $request->get('map_id');
        try
        {
            PreRegistration::where('degree_map_id', $mapId)
                          ->update(['is_approved' => true]);
        } catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e);
        }
        return redirect()->back()
            ->with(
                'success',
                'Approval Notice Sent to Student'
            );
    }

    public function generateMap(Request $request) : RedirectResponse
    {
        $user = Auth::user();
        $studentId =  $request->get('student_id');
        if($user->is_admin)
        {
            $campusID = Advisor::where('user_id', $user->id)->value('campus_id');
           return $this->adminGeneratedMap((int)$studentId, "MDC", (int)$campusID);
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
        $studentMaps = $this->studentService->assignedStudents($advisorId);
        return view('admin.advisee-maps', compact('studentMaps'));
    }

    public function index()
    {
        $degreeModels = MapModel::all()->toArray();
        return view('admin.models', compact('degreeModels'));
    }

    public function studentGeneratedMap() : RedirectResponse
    {
        $student = session('student');
        $hasProfile = $this->studentService->maxProfileCount($student->user_id);
        $hasMap = DegreeMap::where('user_id', $student->user_id)->count();
        if($hasMap > 0)
        {
            return redirect()->back()
                ->with(
                    'error',
                    'Multiple Roadmaps Locked until version 2.0!'
                );
        }
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
                $response = $this->cybelService->generateMap($preparedData, true);
                if($response->isSuccessful())
                {
                    $this->mapModelService->saveStudentMap($response->getData(),false);
                    return redirect()
                        ->route('student.view-map')
                        ->with(
                            'success',
                            $response->getData()->message
                        );
                }
            }

        } catch (\Exception $e)
        {
            Log::error($e);
            Log::error($e->getMessage());
        }


        return redirect()
            ->route('student.create-map')
            ->with(
                'error',
                'Error occurred while generated map. Please try again later'
            );
    }

    public function adminGeneratedMap(int $studentUserId, string $institution, int $campusID) : RedirectResponse
    {
        $studentProfile = StudentProfile::where('user_id', $studentUserId)->where('priority', 1)->first();

        $hasMap = DegreeMap::where('user_id', $studentUserId)->count();
        if($hasMap > 0)
        {
            return redirect()->back()
                ->with(
                    'error',
                    'Multiple Student Roadmaps Locked until version 2.0!'
                );
        }
        try
        {
            if(is_null($studentProfile))
            {
                //TODO if no profile, generate generic map
                $preparedData = $this->mapModelService->prepareGenericMapData($studentUserId, "S9501", $campusID);
                $response = $this->cybelService->generateMap($preparedData, false);
            }
            else
            {
                $preparedData = $this->mapModelService->prepareMapData($studentProfile, true);
                $response = $this->cybelService->generateMap($preparedData, true);
            }

            if($response->isSuccessful())
            {
                $this->mapModelService->saveStudentMap($response->getData(), true);
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
    public function saveModel(Request $request) : RedirectResponse
    {
        return redirect()
            ->route('admin.create-model')
            ->with(
                'error',
                'This functionality is locked for the Capstone Presentation'
            );

        try
        {
            $courses = $request->except('_token');
            $preparedData = $this->mapModelService->saveDegreeModel($courses);
            if($preparedData->isSuccessful())
            {
                $response = $this->cybelService->syncDegreeModel($preparedData->getData());
                if (!$response->isSuccessful())
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
