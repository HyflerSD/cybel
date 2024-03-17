<?php

namespace App\Http\Controllers;

use App\Service\StudentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdvisorsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected  StudentService $studentService)
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
        $advisorId = Auth::user()->id;
        $students = $this->studentService->assignedStudents($advisorId);
        return view('admin.dashboard', compact('students'));
    }
}
