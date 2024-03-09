<?php

namespace App\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use League\Csv\Reader;

class MapModelService
{
    public function existingMapModels()
    {
        $usersToInsert = [];
        try
        {
            echo 'heelo';
        }catch(\Exception $e)
        {
            Log::error($e->getMessage());
        }
        return '';
    }
}
