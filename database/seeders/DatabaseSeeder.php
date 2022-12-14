<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(usersTableSeeder::class);
        $this->call(newsItemTableSeeder::class);

        $this->call(faqCatTableSeeder::class);
        $this->call(faqItemTableSeeder::class);

        $this->call(contactsTableSeeder::class);

        $this->call(airtagTableSeeder::class);
        $this->call(userAirtagTableSeeder::class);
    }
}
