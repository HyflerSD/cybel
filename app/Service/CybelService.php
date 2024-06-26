<?php

namespace App\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CybelService
{

    public function generateMap(array $data, bool $hasProfileData): JsonResponse
    {
        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ])->post('http://127.0.0.1:8080/map-generate', $data);

            if($response->successful())
            {
                return response()->json([
                    'message' => 'Successfully Generated Student Map',
                    'data' => $response->body(),
                    'student_profile' => $data['data']['student_profile'],
                    'campus_id' => $data['data']['campus_id'],
                ]);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
        }

        return response()->json([
            'message' => 'Error Generating Student Map',
            'data' => $response->body()
        ], 400);
    }

    public function syncDegreeModel(mixed $preparedData): JsonResponse
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->post('http://127.0.0.1:8080/models', $preparedData);
        return response()->json();
    }
}
