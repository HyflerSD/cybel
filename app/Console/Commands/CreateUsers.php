<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Service\UserService;
use Illuminate\Support\Facades\Log;
use League\Csv\Reader;

class CreateUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create-users {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports user list via formatted csv';

    /**
     * @param UserService $userService
     * @return void
     */
    public function handle(UserService $userService)
    {
        try
        {
            $filePath = $this->argument('file');
            $csvReader = Reader::createFromPath($filePath)->setHeaderOffset(0);
            $userService->createUsers($csvReader);
        }catch(\Exception $e)
        {
            Log::error($e->getMessage());
        }
    }
}
