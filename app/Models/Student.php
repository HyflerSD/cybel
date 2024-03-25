<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'gpa',
        'email',
        'phone',
        'user_id',
        'address',
        'interests',
        'birthdate',
        'start_date',
        'student_id',
        'advisor_id',
        'academic_standing',
        'enrollment_status',
        'concentration_code',
        'total_credits_earned',
        'expected_graduation_date',
    ];


    public function studentProfile() : HasMany
    {
        return $this->hasMany(StudentProfile::class);
    }
    public function advisor() : BelongsTo
    {
        return $this->belongsTo(User::class, 'advisor_id');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function concentration() : BelongsTo
    {
        return $this->belongsTo(Concentration::class, 'concentration_code','concentration_code');
    }
}
