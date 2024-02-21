<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use League\Csv\Reader;
use App\Service\CourseService;
class CreateCourses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-courses {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports course list via formatted csv';

    /**
     * @param CourseService $courseService
     * @return void
     */
    public function handle(CourseService $courseService) : void
    {
        try
        {
            $filePath = $this->argument('file');
            $courses = Reader::createFromPath($filePath)->setHeaderOffset(0);
            $courseService->createCourses($courses);
        }catch (\Exception $e)
        {
            Log::error($e->getMessage());
        }
    }
}
