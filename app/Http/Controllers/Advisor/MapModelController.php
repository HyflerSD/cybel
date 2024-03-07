<?php

namespace App\Http\Controllers\Advisor;
use App\Http\Controllers\Controller;
use App\Service\MapModelService;

class MapModelController extends Controller
{
//    public function __construct(protected StudentService $studentService)
//    {
//    }

    public function index(MapModelService $mapModelService)
    {
        $mapModels = $mapModelService->existingMapModels();
        return view('admin.models', compact('mapModels'));
    }
}
