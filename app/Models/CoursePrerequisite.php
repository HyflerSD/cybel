<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursePrerequisite extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_code',
        'pre_req_course_code',
    ];
}
