<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DepartmentService;
use App\Models\Department;

class DepartmentController extends Controller
{

    public function __construct(protected DepartmentService $departmentService){}

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Validate the request data
        $validated = $request->validate([
            'DepartmentName' => 'required|string|max:100',
        ]);

        $this->departmentService->createDepartment($validated);
        return redirect()->back()->with('success', 'Department created successfully.');
    }
}

