<?php

namespace App\Services;

use App\Models\Department;

class DepartmentService
{
    public function createDepartment(array $data): Department
    {
        return Department::create($data);
    }
}

