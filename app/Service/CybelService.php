<?php

namespace App\Service;

use Illuminate\Http\JsonResponse;

class CybelService
{

    public function generateMap(string $data) : JsonResponse
    {
//        dd($data);
        return response()->json([
            'message' => 'Successfully Generated Student Map',
            'data' => 'succesdata' //TODO send data to cybel
            ], 200);
    }

    public function syncDegreeModel(string $preparedData) : bool
    {
        return false;
    }
}
