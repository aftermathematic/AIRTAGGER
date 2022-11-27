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
                'name' => 'Jan Vermeerbergen',
                'email' => 'janvermeerbergen@gmail.com',
                'message' => 'Lorem ipsizzle dolizzle sit amizzle, owned adipiscing elizzle. pot velizzle, brizzle volutpizzle, suscipit quizzle, gravida vizzle, fo shizzle. Pellentesque egizzle tortizzle. Sed check out this. Daahng dawg at dolor dapibizzle turpizzle gizzle away. Mauris ghetto my shizz izzle shizzlin dizzle. Owned in things. Pellentesque bizzle yo mamma nisi. In shut the shizzle up habitasse platea dictumst. Donec dapibizzle. Curabitur tellus urna, fo ghetto, fo shizzle fo shizzle, funky fresh vitae, nunc. Phat suscipizzle. Integer semper velit sizzle stuff.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Amanda Hugginkiss',
                'email' => 'user@spam.be',
                'message' => 'Lorem ipsum dolor sit amet. Qui quod labore ut mollitia aliquid et placeat culpa aut enim iusto sit dolores reprehenderit quo dolorum doloremque. Eos earum culpa ad necessitatibus totam et sapiente molestiae ut accusantium corporis. 33 omnis quos est eaque nihil 33 repellat velit non quaerat magnam nam dolorem doloribus ut aliquam internos et ipsa voluptas! Vel facere quos et magnam',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Ben Derhover',
                'email' => 'user@spam.be',
                'message' => 'Curabitizzle nizzle dizzle mofo nisi the bizzle mollizzle. Suspendisse potenti. Fizzle odio. Vivamizzle neque. Fo shizzle mah nizzle fo rizzle, mah home g-dizzle orci. Gangsta maurizzle fizzle, interdizzle a, feugizzle mofo amet, yippiyo izzle, pede. Pellentesque gravida. Sizzle shiz mi, volutpizzle shit, shiznit sizzle, crunk sempizzle, velit. Owned izzle ipsizzle. Fo shizzle volutpizzle felis vel orci. Crizzle cool justo fo shizzle nizzle sodales ornare. Fo shizzle venenatizzle fizzle izzle . Nunc tellivizzle. Suspendisse things i saw beyonces tizzles and my pizzle went crizzle stuff. Bling bling doggy ante. Bling bling pharetra, you son of a bizzle eu for sure hendrerit, yo felis elementum sizzle, in aliquizzle magna dope luctizzle pede. Fo shizzle a bizzle.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Chris P. Bacon',
                'email' => 'user@spam.be',
                'message' => 'Lorem ipsum dolor sit amet. Qui quod labore ut mollitia aliquid et placeat culpa aut enim iusto sit dolores reprehenderit quo dolorum doloremque. Eos earum culpa ad necessitatibus totam et sapiente molestiae ut accusantium corporis. 33 omnis quos est eaque nihil 33 repellat velit non quaerat magnam nam dolorem doloribus ut aliquam internos et ipsa voluptas! Vel facere quos et magnam',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Harry Beaver',
                'email' => 'user@spam.be',
                'message' => 'Dolores reprehenderit quo dolorum doloremque. Eos earum culpa ad necessitatibus totam et sapiente molestiae ut accusantium corporis. 33 omnis quos est eaque nihil 33 repellat velit non quaerat magnam nam dolorem doloribus ut aliquam internos et ipsa voluptas! Vel facere quos et magnam',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Onno Zelaer',
                'email' => 'user@spam.be',
                'message' => ' Fo shizzle mah nizzle fo rizzle, mah home g-dizzle orci. Gangsta maurizzle fizzle, interdizzle a, feugizzle mofo amet, yippiyo izzle, pede. Pellentesque gravida. Sizzle shiz mi, volutpizzle shit, shiznit sizzle, crunk sempizzle, velit. Owned izzle ipsizzle. Fo shizzle volutpizzle felis vel orci. Crizzle cool justo fo shizzle nizzle sodales ornare. Fo shizzle venenatizzle fizzle izzle . Nunc tellivizzle. Suspendisse things i saw beyonces tizzles and my pizzle went crizzle stuff. Bling bling doggy ante. Bling bling pharetra, you son of a bizzle eu for sure hendrerit, yo felis elementum sizzle, in aliquizzle magna dope luctizzle pede. Fo shizzle a bizzle.Lorem ipsum dolor sit amet. Qui quod labore ut mollitia aliquid et placeat culpa aut enim iusto sit dolores reprehenderit quo dolorum doloremque. Eos earum culpa ad necessitatibus totam et sapiente molestiae ut accusantium corporis. 33 omnis quos est eaque nihil 33 repellat velit non quaerat magnam nam dolorem doloribus ut aliquam internos et ipsa voluptas! Vel facere quos et magnam',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        ];

        foreach ($items as $item) {
            DB::table('contacts')->insert([$item]);
        }
    }
}