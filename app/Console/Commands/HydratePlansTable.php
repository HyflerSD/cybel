<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use League\Csv\Reader;
use App\Service\PlansService;
class HydratePlansTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:hydrate-plans-table {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(PlansService $plansService): void
    {
        $file_path = $this->argument('file');
        try
        {
            $csvReader = Reader::createFromPath($file_path)->setHeaderOffset(0);
            $plansService->hydratePlansTable($csvReader);
        } catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e);
        }
    }
}
