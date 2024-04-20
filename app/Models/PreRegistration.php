<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PreRegistration extends Model
{
    protected $fillable = [
        "is_approved",
        "map_id"
    ];
    use HasFactory;

    public function degreeMap(): HasOne
    {
        return $this->hasOne(DegreeMap::class, 'map_id', 'degree_map_id');
}
}
