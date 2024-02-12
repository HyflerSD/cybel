<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    use HasFactory;

    protected $table = 'advisors';


    protected $fillable = [
        'fname', 'lname', 'email', 'userName'
    ];

    protected $hidden = ['password'];

}
