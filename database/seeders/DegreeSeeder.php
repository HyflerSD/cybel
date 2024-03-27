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
                'name' => "Bachelors",
                'code' => "BD",
                'type' => "Science",
            ],
            [
                'name' => "Bachelors",
                'code' => "BD",
                'type' => "Arts",
            ],
            [
                'name' => "Associate",
                'code' => "AD",
                'type' => "Science",
            ],
            [
                'name' => "Associate",
                'code' => "AD",
                'type' => "Arts",
            ],
            [
                'name' => "College Credit Certificate",
                'code' => "CCC",
                'type' => "College Credit",
            ],
        ];

        DB::table('degrees')->insert($degrees);
    }
}
