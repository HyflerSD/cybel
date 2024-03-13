<?php

namespace App\Service;
use App\Models\User;
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
        try {
            $students = $csvReader->getRecords();

            foreach ($students as $student) {
                $studentsToInsert[] = [
                    "user_id" => $student['user_id'],
                    "student_id" => $student['student_id'],
                    "advisor_id" => $student['advisor_id'],
                    "phone" => $student['phone'],
                    "address" => $student['address'],
                    "email" => $student['student_email'],
                    "concentration_code" => $student['concentration_code'], //@todo may update this to be dynamic but not right now
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
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }

    public function assignedStudents(int $advisor_id)
    {
        return Student::with('user')->where('advisor_id', $advisor_id)->get();

        /**
         * @todo structure the return data for the student
         */
//        $studentUsers = $students->map(function ($student){
//            return [
//                'fname' => $student->user->fname,
//                'lname' => $student->user->lname,
//                'email' => $student->user->email,
//            ];
//        });

    }

    /**
     * @param string $studentEmail
     * Returns student collection with given email
     */
    public function getStudentByEmail(string $studentEmail) : mixed
    {
        try
        {
            $student = Student::where('email', '=', $studentEmail)
                                ->with('concentration')->first();

        } catch(\Exception $e)
        {
            Log::channel('student')->error(' error get student ' . $e->getMessage());
            Log::error($e->getMessage());
        }
        return $student;
    }

    /**
     * returns advisor information from the users table
     * @param string $advisorId
     */
  public function getAdvisorbyId(string $advisorId) : mixed
  {
        try
        {
            $advisor = User::where('id', '=', $advisorId)->first();
        } catch (\Exception $e)
        {
            Log::channel('advisor')->error(' error get advisor ' . $e->getMessage());
            Log::error($e->getMessage());
        }
        return $advisor;
    }
}
