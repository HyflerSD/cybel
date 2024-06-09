<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $advisors = DB::table('users')->where('is_admin', '=', 1)->get();
        $advisorToInsert = [];
        foreach ($advisors as $advisor)
        {
            $advisorToInsert[] = [
                'user_id' => $advisor->id,
                'campus_id' => '1',
                'department_id' => '2',
            ];
        }
        DB::table('advisors')->insert($advisorToInsert);
    }
}
