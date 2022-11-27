<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class contactsTableSeeder extends Seeder
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
                'message' => 'Lorem ipsum dolor sit amet. Qui quod labore ut mollitia aliquid et placeat culpa aut enim iusto sit dolores reprehenderit quo dolorum doloremque. Eos earum culpa ad necessitatibus totam et sapiente molestiae ut accusantium corporis. 33 omnis quos est eaque nihil 33 repellat velit non quaerat magnam nam dolorem doloribus ut aliquam internos et ipsa voluptas! Vel facere quos et magnam',
                'user_id' => '3'
            ]
        ];

        foreach ($items as $item) {
            DB::table('contacts')->insert([$item]);
        }
    }
}
