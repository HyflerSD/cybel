<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MapModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'courses',
        'institution',
        'course_count',
        'effective_date',
        'identifier_key',
        'concentration_code',
    ];

    public function concentration() :  BelongsTo
    {
        return $this->belongsTo(
            Concentration::class,
            'concentration_code',
            'concentration_code'
        );
    }
}
