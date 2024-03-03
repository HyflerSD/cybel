<?php

namespace App\Service;

use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;
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
                    $exists = DB::table('courses')
                        ->where('course_code',$course['course_code'])
                        ->exists();

                    if(!$exists)
                    {
                        $coursesToInsert[] = [
                            'course_code' => $course['course_code'],
                            'course_name' => $course['course_name'],
                            'credits' =>  $course['credits'],
                            'gen_ed' =>  $course['gen_ed'] ?? null,
                            'course_description' => $course['course_description'] ?? null,
                            'core_ed' =>  $course['core_ed'] ?? null,
                            'elective_ed' => $course['elective_ed'] ?? null,
                        ];
                    }
                }
            }

            //Insert Bulk data
            if(!empty($coursesToInsert))
            {
                DB::table('courses')->insert($coursesToInsert);
                Log::channel('courses')->info('Successfully inserted ' . count($coursesToInsert) . ' courses');
            }
        }catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error("Failed to import courses : " .  $e->getMessage());
        }
    }

    /**
     * @param Reader $csvReader
     * @return void
     * Hydrates the pre reqs table from given csv
     */
    public function hydratePreReqs(Reader $csvReader) : void
    {
        $coursesToInsert = [];
        try
        {

            $courses = $csvReader->getRecords();
            $missingCourses = [];
            foreach ($courses as $course)
            {
                if($course['course_code'] !== "" && $course['pre_req_course_code'] !== "")
                {
                    $missingCourse = DB::table('courses')
                        ->where('course_code', $course['pre_req_course_code'])
                        ->doesntExist();
                    if($missingCourse)
                    {
                        $missingCourses[] = $course['pre_req_course_code'];
                    }
                    $exists = DB::table('course_prerequisites')
                        ->where('course_code',$course['course_code'])
                        ->where('pre_req_course_code',$course['pre_req_course_code'])
                        ->exists();
                    if(!$exists)
                    {
                        $coursesToInsert[] = [
                            'course_code' => $course['course_code'],
                            'pre_req_course_code' => $course['pre_req_course_code'],
                        ];
                    }
                }
            }
            //Insert Bulk data
            if(!empty($coursesToInsert))
            {
                DB::table('course_prerequisites')->insert($coursesToInsert);
                Log::channel('courses')->info('Successfully inserted ' . count($coursesToInsert) . ' pre reqs');
            }
        }catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error("Failed to import courses : " .  $e->getMessage());
        }
    }

    /**
     * @return void
     */
    public function hydrateConcentrationTables(): void
    {
        $course_types = ["gen_ed", "elective_ed", "core_ed"];
        $courses_builder = [];
        try
        {
            foreach ($course_types as $type)
            {
                $collection = Course::where($type,'1')->pluck('course_code');
                if($collection->isNotEmpty())
                {
                    $courses_builder[$type]['course_code'] = $collection->toArray();
                }
            }

            foreach ($course_types as $type) {
                if (isset($courses_builder[$type]['course_code'])) {
                    $dataToInsert = [];
                    foreach ($courses_builder[$type]['course_code'] as $courseId) {
                        $dataToInsert[] = [
                            'course_code' => $courseId,
                            'plan_code' => 'S9501',//fixed id for swe plan for now.
                            ];
                    }
                    if (!empty($dataToInsert)) {
                        DB::table('concentration_courses')->insert($dataToInsert);
                        Log::channel('courses')->info("No Tables to hydrate");
                    }
                }
            }
            Log::channel()->info("Successfully retrieved courses collection");

        }catch (\Exception $e)
        {
            Log::channel('courses')->error("An error occurred while retrieving collection ". $e->getMessage());
            Log::channel('courses')->error($e);
            Log::error($e->getMessage());
        }
    }

    /**
     * @return Collection
     */
    public function allCourses()
    {
        return Course::all();
    }
}
