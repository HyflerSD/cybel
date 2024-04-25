<?php

namespace App\Http\Controllers;

use App\Models\DegreeMap;
use App\Service\StudentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Service\CampusService;


class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(
        protected StudentService $studentService,
        protected CampusService $campusService,
        protected  Request $request
    )
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $studentId = session('student')->student_id;
        $totalCreditsEarned = $this->studentService->getTotalCreditsEarned($studentId);
        $studentsMajor = $this->studentService->getStudentsMajor($studentId);
        $studentProfile = $this->studentService->getProfiles(session('student')->user_id);
        if($studentProfile->count())
        {
            $studentProfile = $studentProfile->first();
        }
        return view('student.dashboard', compact('totalCreditsEarned', 'studentsMajor', 'studentProfile'));
    }

    public function showProfiles()
    {
        $student = (session()->get('student'));
        $studentProfiles = $this->studentService->getProfiles($student->user_id);
        if(!$studentProfiles->count())
        {
            return redirect()
                ->route('student.create-profile')
                ->with(
                    'error',
                    'Please Create A Profile'
                );
        }
        return view('student.profile', compact('studentProfiles'));

    }

    public function createProfile(Request $request)
    {
        return view('student.create-profile');

    }
    public function editProfile(Request $request)
    {
        $student = session()->get('student');
        $studentProfiles = $this->studentService->getProfiles($student->user_id);
        return view('student.edit-profile', compact('studentProfiles'));

    }
    public function showCreateMap()
    {
        $student = (session()->get('student'));
        $studentProfiles = $this->studentService->getProfiles($student->user_id);
        if(!$studentProfiles->count())
        {
            return redirect()
                ->route('student.create-profile')
                ->with(
                    'error',
                    'You must create a profile before generating a map'
                );
        }
        return view('student.create-map', compact('studentProfiles'));
    }

    public function viewMap()
    {
        $student = (session()->get('student'));
        $studentProfiles = $this->studentService->getProfiles($student->user_id);
        if(!$studentProfiles->count())
        {
            return redirect()
                ->route('student.create-map')
                ->with(
                    'error',
                    'You must create a map'
                );
        }
        $semesters = $this->studentService->getStudentMaps($student->user_id);
        $mapStatus = $this->studentService->isMapApproved($student->user_id);
        return view('student.view-map', compact('studentProfiles', 'semesters', 'mapStatus'));
    }

    public function show(Request $request)
    {
        $studentId = $request->session()->get('student')->user_id;
        $coursesHistory = $this->studentService->getStudentHistory($studentId);
        return view('student.completed-courses', compact('coursesHistory'));
    }

    public function saveProfile(Request $request) : RedirectResponse
    {
        $student = (session()->get('student'));
        $profileData = $request->collect()->except('_token');
        $campus = $this->campusService->getCampusByCode($profileData->get('campus_code'));

        $mergedProfile = $profileData->merge([
            'user_id' => $student->user_id,
            'campus_id' => $campus->id,
            'priority' => $profileData['priority'],
            'interest_area' => $profileData['interest_area'],
            'days_of_week' => json_encode($profileData['days_of_week']),
            'time_of_day' => json_encode($profileData['time_of_day']),
        ])->except('campus_code');

        try
        {
            $result = $this->studentService->saveProfileModel($mergedProfile);
            if($result)
            {
                $studentMap = DegreeMap::where('user_id', $student->user_id)->first();
                if($studentMap != null) {
                    if ($studentMap->generated_by_advisor) {
                        return redirect()
                            ->route('student.view-map')
                            ->with(
                                'success',
                                'Successfully Added Profile!'
                            );
                    }
                }
                return redirect()
                    ->route('student.create-map')
                    ->with(
                        'success',
                        'Successfully Added Profile!'
                    );

            }
        } catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e);
        }
        return redirect()->back()
            ->with(
                'error',
                'Locked until version 2.0!'
            );
    }
    public function updateProfile(Request $request) : RedirectResponse
    {
        return redirect()
            ->route('student.edit-profile')
            ->with(
                'error',
                'Locked until version 2.0!'
            );
    }


}
