<?php

namespace Database\Seeders;

use App\Models\EnrollmentPreference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $preferences = new EnrollmentPreference([
            'session' => '',
            'days_of_week' => [
               'Monday',
               'Tuesday',
               'Wednesday',
               'Thursday',
               'Friday',
               'Saturday',
            ],
            'time_of_day' => [
                'Morning',
                'Afternoon',
                'Night',
            ],
            'mode_of_instruction' => [
                'Live',
                'Online',
                'Blended',
                'In-person'
            ],
        ]);
        $preferences->save();
    }
}
