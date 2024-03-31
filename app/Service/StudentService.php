<?php

namespace App\Service;
use App\Models\DegreeMap;
use App\Models\StudentProfile;
use App\Models\User;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use League\Csv\Exception;
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
                    "gpa" => $student['gpa'],
                    "birthdate" => $student['birthdate'],
                    "enrollment_status" => $student['enrollment_status'],
                    "academic_standing" => $student['academic_standing'],
                    "start_date" => $student['start_date'],
                ];
            }
            DB::table('students')->insert($studentsToInsert);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }

    /**
     * @param int $advisor_id
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function assignedStudents(int $advisor_id)
    {
        return Student::with('user')->where('advisor_id', $advisor_id)->get();
    }

    public function getStudentMaps(int $studentUserID)
    {
        return DegreeMap::with('roadMap')->where('user_id', $studentUserID)->get();
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

    public function saveProfileModel(Collection $profileData) : bool
    {
        try
        {
            StudentProfile::create($profileData->toArray());
            return true;
        } catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e);

        }
        return false;
        //logic will be written here to handle the storing of this data to the database
    }

    public function getProfiles(int $userId) : mixed
    {
        try
        {
            return StudentProfile::with(['concentrations', 'campus'])
                ->where('user_id', $userId)
                ->get();
        } catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e);
        }
        return [];
    }
}
