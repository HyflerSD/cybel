<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletedCourse extends Model
{
    use HasFactory;

    protected $fillable = ['grade', 'substituting_course', 'course_code'];
}
