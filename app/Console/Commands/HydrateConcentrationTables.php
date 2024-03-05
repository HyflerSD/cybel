<?php

namespace App\Console\Commands;

use App\Service\CourseService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class HydrateConcentrationTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hydrate-con';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hydrates gen_ed, core_ed, and elective_ed tables';

    /**
     * Execute the console command.
     */
    public function handle(CourseService $courseService)
    {
        try
        {
            $courseService->hydrateConcentrationTables();
        }catch(\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e);
        }
    }
}
