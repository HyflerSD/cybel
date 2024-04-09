<?php

namespace App\Service;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CybelService
{

    public function generateMap(array $data, bool $hasProfileData) : JsonResponse
    {
        try
        {
            if(!$hasProfileData)
            {
                $response = Http::withHeaders([
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ])->post('http://127.0.0.1:8080/map-generate-generic', $data);

            }
            else
            {
                $response = Http::withHeaders([
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ])->post('http://127.0.0.1:8080/map-generate', $data);
            }
        } catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
        }

        return response()->json([
            'message' => 'Successfully Generated Student Map',
            'data' => $response ?? ''
            ]);
    }

    public function syncDegreeModel(array $preparedData) : JsonResponse
    {
        return response()->json();
    }
}
