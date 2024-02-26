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
                    $coursesToInsert[] = [
                        'course_code' => $course['course_code'],
                        'course_name' => $course['course_name'],
                        'credits' =>  $course['credits'],
                        'gen_ed' =>  $course['gen_ed'] ?? null,
                        'core_ed' =>  $course['core_ed'] ?? null,
                        'elective_ed' => $course['elective_ed'] ?? null,
                    ];
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
                $collection = Course::where($type,'1')->pluck('id');
                if($collection->isNotEmpty())
                {
                    $courses_builder[$type]['course_id'] = $collection->toArray();
                }
            }

            foreach ($course_types as $type) {
                if (isset($courses_builder[$type]['course_id'])) {
                    $dataToInsert = [];
                    foreach ($courses_builder[$type]['course_id'] as $courseId) {
                        $dataToInsert[] = [
                            'course_id' => $courseId,
                            'plan_id' => 1,//fixed id for swe plan for now.
                            ];
                    }

                    if (!empty($dataToInsert)) {
                        switch ($type) {
                            case "core_ed":
                            case "elective_ed":
                            case "gen_ed":
                                DB::table($type)->insert($dataToInsert);
                                break;
                            default:
                                Log::channel('courses')->info("No Tables to hydrate");
                                break;
                        }
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
