<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $degrees = [
            [
                'code' => "BD",
                'type' => "Science",
                'name' => "Bachelors",
            ],
            [
                'code' => "BD",
                'type' => "Arts",
                'name' => "Bachelors",
            ],
            [
                'code' => "AD",
                'type' => "Science",
                'name' => "Associate",
            ],
            [
                'code' => "AD",
                'type' => "Arts",
                'name' => "Associate",
            ],
            [
                'code' => "CCC",
                'type' => "College Credit",
                'name' => "College Credit Certificate",
            ],
        ];

        DB::table('degrees')->insert($degrees);
    }
}
