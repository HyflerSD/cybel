<?php

namespace App\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use League\Csv\Reader;

class MapModelService
{
    /** @todo Add all functions pertainig to map data in this service, may create a Cybel app service to handle the
    http interactions with the api */
    public function existingMapModels()
    {
        $usersToInsert = [];
        try
        {
            //@todo add logic to get existing maps
        }catch(\Exception $e)
        {
            Log::error($e->getMessage());
        }
        return '';
    }

    public function prepareMapData(mixed $profile, bool $advisorGenerated, bool $genericMap = false) : array
    {
        $cybelData['data'] = [
           'student_profile' => $profile,
           'generic' => $genericMap
        ];
        dd($cybelData);
        return [];
    }
}
