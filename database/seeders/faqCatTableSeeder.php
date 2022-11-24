<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class faqCatTableSeeder extends Seeder
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
                'id' => 1,
                'title' => 'Managing your account'
            ],
            [
                'id' => 2,
                'title' => 'Using Airtagger'
            ],
            [
                'id' => 3,
                'title' => 'Safety and security'
            ],
            [
                'id' => 4,
                'title' => 'Rules and policies'
            ]
        ];

        foreach ($items as $item) {
            DB::table('faq_cats')->insert([$item]);
        }
    }
}