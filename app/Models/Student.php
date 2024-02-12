<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'fname', 'lname', 'email', 'phone', 'address', 'program', 'GPA', 'birthdate',
        'Residency Status', 'Enrollment Status', 'Academic Standing', 'Start Date',
        'Expected Graduation Date', 'password', 'Total Credits Earned', 'advisorID', 'campusID',
    ];

    protected $hidden = ['password'];

    //@todo Build advisor model
    public function advisor() {
        return $this->belongsTo(Advisor::class, 'advisorID', 'advisorID');
    }

    //@todo build campus model
    public function campus() {
        return $this->belongsTo(Campus::class, 'campusID', 'campusID');
    }
}
