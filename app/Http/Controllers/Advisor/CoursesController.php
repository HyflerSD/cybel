<?php

namespace App\Http\Controllers\Advisor;

use App\Http\Controllers\Controller;
use App\Service\CourseService;
use Illuminate\Http\Request;

class CoursesController extends Controller
{

    public function __construct(protected CourseService $courseService)
    {}

    public function index()
    {
        $courses = $this->courseService->allCourses();
        return view('admin.courses', compact('courses'));
    }
}
