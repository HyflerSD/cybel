<?php

namespace App\Http\Controllers\Advisor;

use App\Http\Controllers\Controller;
use App\Service\StudentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdviseesController extends Controller
{
    public function __construct(protected StudentService $studentService)
    {}

    public function index()
    {
        $advisorId = Auth::user()->id;
        $students = $this->studentService->assignedStudents($advisorId);
        return view('admin.advisees', compact('students'));
    }
}
