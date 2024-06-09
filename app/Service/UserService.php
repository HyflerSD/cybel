<?php

namespace App\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use League\Csv\Reader;

class UserService
{
    /**
     * @param Reader $csvReader
     * @return void
     */
    public function createUsers(Reader $csvReader)
    {
        $usersToInsert = [];
        try
        {
            $users = $csvReader->getRecords();
            foreach ($users as $user)
            {
                $usersToInsert[] = [
                    'fname' => $user['fname'],
                    'lname' => $user['lname'],
                    'email' => $user['email'],
                    'password' => Hash::make($user['password']),
                    'is_admin' => ($user['is_admin'] === 'false') ? 0 : 1
                ];
            }
            if(!empty($usersToInsert))
            {
                DB::table('users')->insert($usersToInsert);
            }

        }catch(\Exception $e)
        {
            Log::error($e->getMessage());
        }
    }
}
