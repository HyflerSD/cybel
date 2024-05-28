<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
      'role',
      'user_id',
      'campus_id',
      'department_id'
    ];


    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function campus() : BelongsTo
    {
        return $this->belongsTo(Campus::class);
    }
}
