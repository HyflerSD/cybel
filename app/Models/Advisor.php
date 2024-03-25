<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Advisor extends Model
{
    protected $fillable = [
        'campus_id',
        'department_id',
    ];
    use HasFactory;

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
