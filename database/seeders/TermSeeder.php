<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $terms = [
            ["term_code" => "spring_2010"],
            ["term_code" => "summer_2010"],
            ["term_code" => "fall_2010"],
            ["term_code" => "spring_2011"],
            ["term_code" => "summer_2011"],
            ["term_code" => "fall_2011"],
            ["term_code" => "spring_2012"],
            ["term_code" => "summer_2012"],
            ["term_code" => "fall_2012"],
            ["term_code" => "spring_2013"],
            ["term_code" => "summer_2013"],
            ["term_code" => "fall_2013"],
            ["term_code" => "spring_2014"],
            ["term_code" => "summer_2014"],
            ["term_code" => "fall_2014"],
            ["term_code" => "spring_2015"],
            ["term_code" => "summer_2015"],
            ["term_code" => "fall_2015"],
            ["term_code" => "spring_2016"],
            ["term_code" => "summer_2016"],
            ["term_code" => "fall_2016"],
            ["term_code" => "spring_2017"],
            ["term_code" => "summer_2017"],
            ["term_code" => "fall_2017"],
            ["term_code" => "spring_2018"],
            ["term_code" => "summer_2018"],
            ["term_code" => "fall_2018"],
            ["term_code" => "spring_2019"],
            ["term_code" => "summer_2019"],
            ["term_code" => "fall_2019"],
            ["term_code" => "spring_2020"],
            ["term_code" => "summer_2020"],
            ["term_code" => "fall_2020"],
            ["term_code" => "spring_2021"],
            ["term_code" => "summer_2021"],
            ["term_code" => "fall_2021"],
            ["term_code" => "spring_2022"],
            ["term_code" => "summer_2022"],
            ["term_code" => "fall_2022"],
            ["term_code" => "spring_2023"],
            ["term_code" => "summer_2023"],
            ["term_code" => "fall_2023"],
        ];

        $sems = ["spring", "summer", "fall"];
        $year = 2024;
        for ($i = 0; $i < 12; $i++) {
            foreach ($sems as $sem) {
                $terms[] = [
                    "term_code" => $sem . "_" . $year
                ];
            }
            $year++;
        }
        DB::table('terms')->insert($terms);
    }
}
