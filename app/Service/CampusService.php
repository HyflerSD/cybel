<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;

class CampusService
{

    /**
     * @param $campusName
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Query\Builder|object|null
     */
    public function getCampusByCode($campusCode) : mixed
    {
       return DB::table('campuses')->where('code', $campusCode)->first();
    }

}
