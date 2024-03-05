<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Service\CourseService;
use Illuminate\Support\Facades\Log;
use League\Csv\Reader;

class HydratePreReqs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hydrate-preqs {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hydrates the pre requisites table';

    /**
     * Execute the console command.
     */
    public function handle(CourseService $courseService)
    {
        try
        {
            $filePath = $this->argument('file');
            $courses = Reader::createFromPath($filePath)->setHeaderOffset(0);
            $courseService->hydratePreReqs($courses);
        }catch (\Exception $e)
        {
            Log::error($e->getMessage());
        }
    }
}
