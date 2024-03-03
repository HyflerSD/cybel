<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConcentrationCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_code',
        'course_code'
    ];
}
