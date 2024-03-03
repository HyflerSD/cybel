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
                'code' => "BD",
                'type' => "Science",
            ],
            [
                'name' => "Associate",
                'code' => "BD",
                'type' => "Arts",
            ],
        ];

        DB::table('degrees')->insert($degrees);
    }
}
