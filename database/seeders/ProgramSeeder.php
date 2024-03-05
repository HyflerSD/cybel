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
                'name' => "Cyber Security",
                'code' => "CBS",
                'degree_id' => "1",
            ],
            [
                'name' => "Data Analytics",
                'code' => "DANA",
                'degree_id' => "1",
            ],
            [
                'name' => "Electrical and Computer Engineering Technology",
                'code' => "ECET",
                'degree_id' => "1",
            ],
            [
                'name' => "Information Systems Technology",
                'code' => "IST",
                'degree_id' => "1",
            ],
            [
                'name' => "Computer Information Systems",
                'code' => "CIST",
                'degree_id' => "4",
            ],
        ];
        DB::table('programs')->insert($programs);
    }
}
