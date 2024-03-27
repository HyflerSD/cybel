<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EnrollmentPreference extends Model
{
    use HasFactory;
    protected $fillable = [
        'session',
        'time_of_day',
        'days_of_week',
        'mode_of_instruction',
    ];
}
