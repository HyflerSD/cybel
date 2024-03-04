<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Service\StudentService;
use Illuminate\Support\Facades\Log;
use League\Csv\Reader;
class CreateStudents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create-students {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(StudentService $studentService)
    {
        $filepath = $this->argument('file');
        try
        {
            $csvReader = Reader::createFromPath($filepath)->setHeaderOffset(0);
            $studentService->createStudents($csvReader);

        } catch (\Exception $e)
        {
            Log::error($e->getMessage());
        }
    }
}
