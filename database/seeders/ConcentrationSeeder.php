<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConcentrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $academicPlans = [
            [
                'name' => "Software Engineering",
                'program_code' => "IST",
                'concentration_code' => "S9501",
                'description' => "The Bachelor of Science in Information Systems Technology (IST) introduces concepts
                                  upon which information systems are founded and analyzes them as solutions to
                                  real-world problems. The curriculum provides students with the critical skills
                                  and knowledge required to direct and control the design, concentrationning and management of
                                  information infrastructures in professional settings. This degree program addresses
                                  the workplace need for professionals with information systems management and development expertise."
            ],
            [
                'name' => "Networking",
                'program_code' => "IST",
                'concentration_code' => "S9500",
                'description' => "The Bachelor of Science in Information Systems Technology (IST) introduces concepts
                                  upon which information systems are founded and analyzes them as solutions to
                                  real-world problems. The curriculum provides students with the critical skills
                                  and knowledge required to direct and control the design, planning and management of
                                  information infrastructures in professional settings. This degree program addresses
                                  the workplace need for professionals with information systems management and development expertise."
            ],
        ];
        DB::table('concentrations')->insert($academicPlans);

    }
}
