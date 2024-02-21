<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Service\UserService;
use League\Csv\Reader;

class CreateUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-users {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports user list via formatted csv';

    /**
     * Execute the console command.
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

        }
    }
}
