<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'combination',
        'course_id',
        'is_course_taken',
        'priority_index',
        'student_interests',
        'effective_date',
    ];
}
