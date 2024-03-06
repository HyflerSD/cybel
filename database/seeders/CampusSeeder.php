<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $campuses = [
            [
                'description' => 'North Campus'
            ],
            [
                'description' => 'Wolfson Campus'
            ],
            [
                'description' => 'Kendall Campus'
            ],
            [
                'description' => 'Doral Campus'
            ],
        ];
        DB::table('campuses')->insert($campuses);
    }
}
