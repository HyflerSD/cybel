<?php

namespace App\Service;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use League\Csv\Reader;
class PlansService extends Seeder
{

    public function hydratePlansTable(Reader $csvReader)
    {
        $plansToInsert = [];
        try
        {
            $plans = $csvReader->getRecords();

            foreach ($plans as $plan) {

                $plansToInsert[] = [
                    'plan_id' => $plan['plan_id'],
                    'description' => $plan['description'],
                ];
            }

            if(!empty($plansToInsert))
            {
                DB::table('academic_plans')->insert($plansToInsert);
                Log::channel('plans')->info("Successfully added plans to academics plans table");
            }
        }catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::channel('plans')->error("Error adding plans to academics plans table " . $e);
            Log::error($e);
        }
    }
}
