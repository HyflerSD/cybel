<?php

namespace App\Service;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use League\Csv\Reader;
class StudentService extends Seeder
{

    public function createStudents(Reader $csvReader)
    {
        $studentsToInsert = [];
        try
        {
            $students = $csvReader->getRecords();

            foreach ($students as $student) {
                $studentsToInsert[] = [
                    "user_id" => $student['user_id'],
                    "student_id" => $student['student_id'],
                    "advisor_id" => $student['advisor_id'],
                    "phone" => $student['phone'],
                    "address" => $student['address'],
                    "major" => $student['major'],
                    "gpa" => $student['gpa'],
                    "birthdate" => $student['birthdate'],
                    "enrollment_status" => $student['enrollment_status'],
                    "academic_standing" => $student['academic_standing'],
                    "start_date" => $student['start_date'],
                    "expected_graduation_date" => $student['expected_graduation_date'],
                    "total_credits_earned" => $student['total_credits_earned'],
                    "interests" => json_encode($student['interests'], true),
//                    "advisor_email" => $student['advisor_email'],
                ];
            }
            DB::table('students')->insert($studentsToInsert);
        }catch (\Exception $e)
        {
            Log::error($e->getMessage());
        }
    }

    public function assignedStudents()
    {
        return Student::all();
    }

}
