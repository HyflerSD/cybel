<?php

namespace App\Service;

use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use League\Csv\Reader;
use Illuminate\Database\Seeder;
class CourseService extends Seeder
{

    /**
     * @param Reader $csvReader
     * @return void
     *  Function imports courses in bulk via csv file
     */
    public function createCourses(Reader $csvReader) : void
    {
        $coursesToInsert = [];
        try
        {

            $courses = $csvReader->getRecords();
            foreach ($courses as $course)
            {


                if($course['course_code'] !== "SKIP" && $course['course_code'] !== "")
                {
                    $coursesToInsert[] = [
                        'course_code' => $course['course_code'],
                        'course_name' => $course['course_name'],
                        'credits' =>  $course['credits']
                    ];

                }
            }

            //Insert Bulk data
            if(!empty($coursesToInsert))
            {
                DB::table('courses')->insert($coursesToInsert);
            }
        }catch (\Exception $e)
        {
            Log::error($e->getMessage());
        }
    }

    public function allCourses()
    {
        return Course::all();
    }
}
