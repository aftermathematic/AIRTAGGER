<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $items = [
            [
                'id'=>1,
                'username'=>'aftermathematic',
                'email'=>'janvermeerbergen@gmail.com',
                'password'=>'12345678',
                'birthday'=>'2000-01-01',
                'aboutme'=>'All your base are belong to us',
                'appleid'=>'janvermeerbergen@gmail.com',
                'admin'=>1,
                'remember_token'=>NULL
                ],[
                'id'=>2,
                'username'=>'admin',
                'email'=>'admin@ehb.be',
                'password'=>'Password!321',
                'birthday'=>'2000-01-01',
                'aboutme'=>'',
                'appleid'=>'',
                'admin'=>1,
                'remember_token'=>NULL
                ],[
                'id'=>3,
                'username'=>'user',
                'email'=>'user@spam.be',
                'password'=>'php',
                'birthday'=>'2000-01-01',
                'aboutme'=>'',
                'appleid'=>'',
                'admin'=>0,
                'remember_token'=>NULL
                ]
        ];

        foreach($items as $item){
            DB::table('users')->insert([$item]);
        }          
            

    }
}