<?php

namespace App\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use League\Csv\Reader;

class UserService
{
    public function createUsers(Reader $csvReader)
    {
        $usersToInsert = [];
        try
        {
            $users = $csvReader->getRecords();
            foreach ($users as $user)
            {
                if($user['is_advisor'] === 'false')
                {
                    $is_advisor = 0;
                }
                else
                {
                    $is_advisor = 1;
                }
                $usersToInsert[] = [
                    'fname' => $user['fname'],
                    'lname' => $user['lname'],
                    'email' => $user['email'],
                    'password' => Hash::make($user['password']),
                    'is_advisor' => $is_advisor
                ];
            }
            if(!empty($usersToInsert))
            {
                DB::table('users')->insert($usersToInsert);
            }

        }catch(\Exception $e)
        {

        }
    }
}
