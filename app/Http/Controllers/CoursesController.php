<?php

namespace App\Http\Controllers;
use App\Service\CourseService;
use Illuminate\Http\Request;
class CoursesController extends Controller
{
    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

}
