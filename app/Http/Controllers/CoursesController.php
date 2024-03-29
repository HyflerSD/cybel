<?php

namespace App\Http\Controllers;
use App\Service\CourseService;
use Illuminate\Http\Request;
class CoursesController extends Controller
{
    public function __construct(protected CourseService $courseService)
    {}

    public function index()
    {
        $courses = $this->courseService->allCourses();

        return view('student.courses', compact('courses'));
    }


}
