<?php

namespace App\Service;

use App\Models\Concentration;
use App\Models\Course;
use App\Models\DegreeMap;
use App\Models\PreRegistration;
use App\Models\StudentHistory;
use App\Models\StudentProfile;
use App\Models\User;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
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
        return Student::with('user')->where('advisor_id', $advisor_id)->with(['degreeMaps.preRegistrations', 'studentProfiles'])->get();
    }

    public function isMapApproved(int $studentId) : bool
    {
        $profile = DegreeMap::where('user_id', $studentId)->pluck('map_id')->first();
        $s = PreRegistration::with('degreeMap')->where('degree_map_id', $profile)->first();
        return $s?->is_approved ?? false;
    }
    public function getStudentMaps(int $studentUserID) : array
    {
        $map = DegreeMap::with('student')
            ->where('user_id', $studentUserID)
            ->orderBy('id', 'asc')
            ->get()
            ->groupBy('term_code');
        $termArray = [];
        foreach ($map as $termCode => $term) {
            foreach ($term as $value) {
                $termArray[$termCode][] = [
                    Course::where('course_code', $value->course_code)->first()
                ];
            }
        }
        return $termArray;
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

    public function getStudentHistory(int $studentId): mixed
    {
        $studentHistory = [];
        try
        {
            $studentHistory = StudentHistory::where('user_id', $studentId)
                ->get();
        }catch (\Exception $e){

        }
        return $studentHistory;
    }

    public function getTotalCreditsEarned(int $studentId): int
    {
        $totalCredits = 0;

        try
        {
            $studentHistory = Student::where('student_id', $studentId)->with('user')->first();

            if ($studentHistory)
            {
                $creditsEarned = StudentHistory::where('user_id', $studentHistory->user->id)->sum('credits_earned');
                $totalCredits = $studentHistory->total_credits + $creditsEarned;
            }
        } catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e);
        }

        return (int) $totalCredits;
    }

    public function getStudentsMajor(int $studentId): string
    {
        try
        {
            $studentHistory = Student::where('student_id', $studentId)->with('user')->first();
            $studentConcentrationCode = StudentProfile::where('user_id', $studentHistory->user_id)->first();
            $studentMajor =  Concentration::where('concentration_code', $studentConcentrationCode)->first()->name ?? 'None yet';
        } catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e);
        }

        return $studentMajor;
    }
    public function saveProfileModel(Collection $profileData) : bool
    {
        try
        {
            if (!$this->maxProfileCount($profileData['user_id']))
            {
                StudentProfile::create($profileData->toArray());
                return true;
            }
        } catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e);

        }
        return false;
        //logic will be written here to handle the storing of this data to the database
    }

    public function getProfiles(int $userId) : \Illuminate\Database\Eloquent\Collection
    {
        return StudentProfile::with(['concentrations', 'campus'])
            ->where('user_id', $userId)
            ->get();
    }
    public function maxProfileCount(int $userId) : bool
    {
        //TODO: Limiting users to 1 profile for now.
            return StudentProfile::with(['concentrations', 'campus'])
                ->where('user_id', $userId)
                ->count() >= 1;
    }

    /**
     * @param mixed $user_id
     * @param int $profilePriority
     * @return mixed
     */
    public function getProfileByPriority(mixed $user_id, int $profilePriority)
    {
        return StudentProfile::where('user_id', $user_id )
            ->where('priority',$profilePriority)->first();
    }
}
