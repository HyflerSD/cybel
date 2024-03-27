<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_code',
        'level_combination',
        'institution',
        'effective_date',
        'priority_index',
        'concentration_code',
    ];
}
