<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            ['name' => 'Math'],
            ['name' => 'Entec'],
            ['name' => 'Business'],
            ['name' => 'English'],
        ];
        DB::table('departments')->insert($departments);
    }
}
