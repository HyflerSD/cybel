<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Service\ApiService;

class Cybel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cybel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(ApiService $apiService)
    {
//       $apiService->authenticate();
        $client = json_decode($apiService->generateClient(), true);
        var_dump($client);
        $authcode = $apiService->authorizationCode($client)['data']['auth_code'];

        $apiService->refreshToken($client, $authcode);
//        $apiService->generateMap();
    }
}
