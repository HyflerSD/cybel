<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class StudentProfile extends Model
{
    protected $fillable = [
        'user_id',
        'priority',
        'campus_id',
        'time_of_day',
        'days_of_week',
        'interest_area',
        'concentration_code',
        'mode_of_instruction',
        'courses_per_semester', //TODO at most 18 credits per semester, notify of large number of credits
        'total_credits_earned',
        'expected_graduation_date',
    ];

    public $timestamps = true;
    use HasFactory;

    public function student() : BelongsTo
    {
        return $this->belongsTo(Student::class, 'user_id');
    }

    public function concentrations() : BelongsTo
    {
        return $this->belongsTo(Concentration::class, 'concentration_code', 'concentration_code');
    }

    public function campus() : BelongsTo
    {
        return $this->belongsTo(Campus::class, 'campus_id');
    }
}

