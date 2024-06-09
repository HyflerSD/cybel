<?php

namespace App\Http\Controllers\Auth;
use App\Service\StudentService;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        //check if admin and redirect to correct page
        if($user->is_admin)
        {
            $advisorUser = Auth::user();
            $advisor = DB::table('advisors')->where('user_id', $advisorUser->id)->first();
            $advisorCampus = DB::table('campuses')->where('id', $advisor->campus_id)->first();
            $advisorDepartment = DB::table('departments')->where('id', $advisor->department_id)->first();
//            dd($advisorDepartment);
            Session::put([
                'advisor' => $advisorUser,
                'advisorCampus' => $advisorCampus,
                'advisorDepartment' => $advisorDepartment,
            ]);
            return redirect()->route('admin.dashboard');
        }
        else
        {
            $studentEmail = $user->email;
            $studentService = new StudentService;
            $student = $studentService->getStudentByEmail($studentEmail);
            $advisor = $studentService->getAdvisorbyId($student->advisor_id);

            Session::put([
                'student' => $student,
                'advisor' => $advisor,
            ]);
            return redirect()->route('student.dashboard');
        }
    }
}
