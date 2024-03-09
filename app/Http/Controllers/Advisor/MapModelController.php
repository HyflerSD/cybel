<?php

namespace App\Http\Controllers\Advisor;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Service\MapModelService;

class MapModelController extends Controller
{
//    public function __construct(protected StudentService $studentService)
//    {
//    }

    public function index(MapModelService $mapModelService)
    {
        $mapModels = $mapModelService->existingMapModels();
        $courses = Course::all();
        return view('admin.models', compact('courses'));
    }
}
