<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_code',
        'course_name',
        'course_level',
        'credits',
        'course_description',
        'gen_ed',
        'core_ed',
        'elective_ed',
    ];
}
