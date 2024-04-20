<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DegreeMap extends Model
{
    use HasFactory;

    protected $fillable = [
        'map_id',
        'user_id',
        'term_code',
        'updated_by',
        'is_internal',
        'time_of_day',
        'course_code',
        'days_of_week',
        'concentration_code',
    ];

    public function student() : BelongsTo
    {
        return $this->belongsTo(Student::class, 'user_id');
    }
   public function preRegistrations(): HasOne
   {
       return $this->hasOne(PreRegistration::class, 'degree_map_id', 'map_id');
   }
}
