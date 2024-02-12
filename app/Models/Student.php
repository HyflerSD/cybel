<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    /**
     * @return BelongsTo
     */
    public function advisor() {
        return $this->belongsTo(Advisor::class, 'advisorID', 'advisorID');
    }

    /**
     * @return BelongsTo
     */
    public function campus() {
        return $this->belongsTo(Campus::class, 'campusID', 'campusID');
    }
}
