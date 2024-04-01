<?php

namespace App\Service;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class CybelService
{

    public function generateMap(string $data) : JsonResponse
    {
        return response()->json([
            'message' => 'Successfully Generated Student Map',
            'data' => 'succesdata' //TODO send data to cybel
            ]);
    }

    public function syncDegreeModel(string $preparedData) : bool
    {
        return false;
    }
}
