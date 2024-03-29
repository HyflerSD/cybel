<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'code' => "CBS",
                'degree_id' => "1",
                "department_id" => "2",
                'name' => "Cyber Security",
            ],
            [
                'code' => "DANA",
                'degree_id' => "1",
                'department_id' => "2",
                'name' => "Data Analytics",
            ],
            [
                'code' => "ECET",
                'degree_id' => "1",
                'department_id' => "2",
                'name' => "Electrical and Computer Engineering Technology",
            ],
            [
                'code' => "IST",
                'degree_id' => "1",
                'department_id' => "2",
                'name' => "Information Systems Technology",
            ],
            [
                'code' => "CIST",
                'degree_id' => "4",
                'department_id' => "2",
                'name' => "Computer Information Systems",
            ],
        ];
        DB::table('programs')->insert($programs);
    }
}
