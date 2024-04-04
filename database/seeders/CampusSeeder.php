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
                'description' => 'North Campus',
                'code' => 'nc'
            ],
            [
                'description' => 'Wolfson Campus',
                'code' => 'wc',
            ],
            [
                'description' => 'Kendall Campus',
                'code' => 'kc',
            ],
            [
                'description' => 'Doral Campus',
                'code' => 'dc',
            ],
        ];
        DB::table('campuses')->insert($campuses);
    }
}
