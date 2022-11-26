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
                'password'=> Hash::make('00000000'),
                'birthday'=>'1980-09-30',
                'aboutme'=>'All your base are belong to us',
                'admin'=>1,
                'remember_token'=>NULL
                ],[
                'id'=>2,
                'username'=>'admin',
                'email'=>'admin@ehb.be',
                'password'=> Hash::make('Password!321'),
                'admin'=>1
                ],[
                'id'=>3,
                'username'=>'user',
                'email'=>'user@spam.be',
                'password'=> Hash::make('00000000'),
                ]
        ];

        foreach($items as $item){
            DB::table('users')->insert([$item]);
        }          
            

    }
}