<?php

namespace App\Http\Controllers\Advisor;

use App\Http\Controllers\Controller;
use App\Service\StudentService;
use Illuminate\Http\Request;

class AdviseesController extends Controller
{
    public function __construct(protected StudentService $studentService)
    {}

    public function index()
    {
        $students = $this->studentService->assignedStudents();

        return view('admin.advisees', compact('students'));
    }
}
