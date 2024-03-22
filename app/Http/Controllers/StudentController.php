<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Service\StudentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected StudentService $studentService)
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
    public function show(Request $request)
    {
        $studentId = $request->session()->get('student')->student_id;
        $coursesHistory = $this->studentService->getStudentHistory($studentId);

        return view('student.completed-courses', compact('coursesHistory'));
    }


}
