<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DegreeMap extends Model
{
    use HasFactory;

    protected $fillable = [
        'term',
        'map_id',
        'student_id',
        'course_code',
        'is_internal',
        'map_priority',
        'concentration_code',
    ];

    public function roadMap() : BelongsTo
    {
        return $this->belongsTo(Student::class, 'user_id');
    }
}
