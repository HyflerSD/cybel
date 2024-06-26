<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SeedCommand extends Command
{
    protected $signature = 'seed';

    protected $description = 'Populate seeders';

    public function handle() : void
    {
        $seeders = [
            'DegreeSeeder',
            'DepartmentSeeder',
            'ProgramSeeder',
            'MajorSeeder',
            'ConcentrationSeeder',
            'TermSeeder',
            'CampusSeeder',
            'AdvisorSeeder',
        ];

        foreach ($seeders as $seeder) {
           Artisan::call('db:seed', ['--class' => $seeder]);
           $this->info($seeder . ' ran successfully');
        }
    }
}
