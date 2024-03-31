<?php

namespace App\Http\Controllers;
use App\Models\Campus;
use App\Models\Student;
use App\Service\StudentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        return view('student.dashboard');

    }
    public function profile()
    {
        return view('student.profile');

    }

    public function showCreateMap()
    {
        return view('student.create-map');
    }
    public function show()
    {
        return view('student.completed-courses');
    }

    public function saveProfile(Request $request) : RedirectResponse
    {
        $student = (session()->get('student'));
        $profileData = $request->collect()->except('_token');
        $campus = $this->campusService->getCampusByCode($profileData->get('campus_code'));

        $mergedProfile = $profileData->merge([
            'user_id' => $student->user_id,
            'campus_id' => $campus->id,
            'priority' => $campus->id,
            'interest_area' => $profileData['interest_area'],
            'days_of_week' => json_encode($profileData['days_of_week']),
            'time_of_day' => json_encode($profileData['time_of_day']),
        ])->except('campus_code');

        try
        {
            $result = $this->studentService->saveProfileModel($mergedProfile);
            if($result)
            {
                return redirect()->route('student.profile');
            }
        } catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e);
        }
        return redirect()->route('student.profile');
//        return redirect()->withErrors('Unable to save profile.')->withInput(); TODO: fix redirect
    }

}
