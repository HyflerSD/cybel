<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'term_code',
        'concentration_code',
        'course_code',
        'grade',
        'credits_earned',
        'credits_attempted',
    ];
}
