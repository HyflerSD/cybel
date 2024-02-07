<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    // Specify the associated table name
    protected $table = 'Departments';

    // Specify the primary key if it's not "id"
    protected $primaryKey = 'DepartmentID';

    // Enable Time stamp
    public $timestamps = false;

    // Define fillable properties for mass assignment
    protected $fillable = ['DepartmentName'];
}
