<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function student() : BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function courses() : BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_code');
    }

}
