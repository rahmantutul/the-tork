<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $usersData=[
            [
            'id'=>1,
            'email'=>"user1@user.com",
            'name'=>"User1",
            'depertment_id'=>1,
            'password'=>Hash::make("user1@"),
            ],
            [
            'id'=>2,
            'email'=>"user2@user.com",
            'name'=>"User2",
            'depertment_id'=>1,
            'password'=>Hash::make("user2@"),
            ],
            [
            'id'=>3,
            'email'=>"user3@user.com",
            'name'=>"User3",
            'depertment_id'=>1,
            'password'=>Hash::make("user3@"),
            ],
            [
            'id'=>4,
            'email'=>"user4@user.com",
            'name'=>"User4",
            'depertment_id'=>2,
            'password'=>Hash::make("user4@"),
            ],
            [
            'id'=>5,
            'email'=>"user5@user.com",
            'name'=>"User5",
            'depertment_id'=>2,
            'password'=>Hash::make("user5@"),
            ],
            [
            'id'=>6,
            'email'=>"user6@user.com",
            'name'=>"User6",
            'depertment_id'=>2,
            'password'=>Hash::make("user6@"),
            ],
        ];
        
        foreach($usersData as $key => $records){
            \App\Models\User::create($records);
        }
    }
}
