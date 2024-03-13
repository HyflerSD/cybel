<?php

namespace App\Http\Controllers\Advisor;

use App\Http\Controllers\Controller;

class ProfessorsController extends Controller
{
    public function index()
    {
        return view('admin.professors');
    }
}
