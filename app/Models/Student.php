<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'student_id',
        'phone',
        'address',
        'major',
        'gpa',
        'birthdate',
        'enrollment_status',
        'academic_standing',
        'start_date',
        'expected_graduation_date',
        'total_credits_earned',
        'advisor_email',
        'interests'
    ];
    public function advisor() : BelongsTo
    {
        return $this->belongsTo(User::class, 'advisor_id');
    }

}
