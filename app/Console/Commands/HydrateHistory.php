<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use League\Csv\Reader;
use App\Service\CourseService;

class HydrateHistory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hh {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hydrates Student history table';

    /**
     * Execute the console command.
     */
    public function handle(CourseService $courseService)
    {
        $filePath = $this->argument('file');
        try
        {
            $csvReader = Reader::createFromPath($filePath)->setHeaderOffset(0);
            $courseService->hydrateHistory($csvReader);

        }catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e);
        }
    }
}
