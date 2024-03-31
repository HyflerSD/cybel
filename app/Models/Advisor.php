<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Advisor extends Model
{
    protected $fillable = [
        'user_id',
        'campus_id',
        'department_id',
    ];
    use HasFactory;

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function campus() : BelongsTo
    {
        return $this->belongsTo(Campus::class);
    }
}
