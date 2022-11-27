<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class newsItemTableSeeder extends Seeder
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
                'title' => 'This is the very first Airtagger news item!',
                'content' => 'We like to welcome to you to the Airtagger website, your source for keeping track of all your Airtags in one place!',
                'image' => '',
                'user_id' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'This is the second Airtagger news item!',
                'content' => 'We like to welcome to you to the Airtagger website, your source for keeping track of all your Airtags in one place!',
                'image' => '',
                'user_id' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        ];

        foreach ($items as $item) {
            DB::table('news_items')->insert([$item]);
        }
    }
}