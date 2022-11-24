<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class faqItemTableSeeder extends Seeder
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
                'question' => 'Lorem ipsum dolor sit amet, ne sint vocent pri ?',
                'answer' => 'Eam sensibus petentium te, mea ad ignota eleifend. Mea te utamur abhorreant sententiae, ea alii graecis honestatis vix. Mea reque invenire ea, hinc admodum pri in, ipsum nostrud aliquid id has. Eu vel iusto recteque, mei iisque prompta eruditi ad, ut mel autem dicit putant. Ignota persius officiis eu vix. Nibh accumsan eu sit, homero rationibus percipitur in nam, sea ferri debet ad.',
                'faq_cat_id' => 1
            ],
            [
                'question' => 'vim eu cibo sonet noster. Vidit periculis conceptam est an ?',
                'answer' => 'Mei iisque prompta eruditi ad, ut mel autem dicit putant. Ignota persius officiis eu vix. Nibh accumsan eu sit, homero rationibus percipitur in nam, sea ferri debet ad.',
                'faq_cat_id' => 2
            ],
            [
                'question' => 'Ad accusam gloriatur sea, at aliquip appetere mei ?',
                'answer' => 'Mea te utamur abhorreant sententiae, ea alii graecis honestatis vix. Mea reque invenire ea, hinc admodum pri in, ipsum nostrud aliquid id has. Eu vel iusto recteque, mei iisque prompta eruditi ad, ut mel autem dicit putant. Ignota persius officiis eu vix. Nibh accumsan eu sit, homero rationibus percipitur in nam, sea ferri debet ad.',
                'faq_cat_id' => 3
            ],
            [
                'question' => 'Ea ius impetus accumsan facilisi. Simul atomorum scriptorem ',
                'answer' => 'Eam no cibo novum labores, timeam percipit an his. Has nonumes hendrerit at, no praesent voluptatum adversarium quo, ad mel pertinacia rationibus incorrupte.',
                'faq_cat_id' => 4
            ],
            [
                'question' => 'Lorem ipsum dolor sit amet, ne sint vocent pri ?',
                'answer' => 'Eam sensibus petentium te, mea ad ignota eleifend. Mea te utamur abhorreant sententiae, ea alii graecis honestatis vix. Mea reque invenire ea, hinc admodum pri in, ipsum nostrud aliquid id has. Eu vel iusto recteque, mei iisque prompta eruditi ad, ut mel autem dicit putant. Ignota persius officiis eu vix. Nibh accumsan eu sit, homero rationibus percipitur in nam, sea ferri debet ad.',
                'faq_cat_id' => 4
            ],
            [
                'question' => 'vim eu cibo sonet noster. Vidit periculis conceptam est an ?',
                'answer' => 'Mei iisque prompta eruditi ad, ut mel autem dicit putant. Ignota persius officiis eu vix. Nibh accumsan eu sit, homero rationibus percipitur in nam, sea ferri debet ad.',
                'faq_cat_id' => 3
            ],
            [
                'question' => 'Ad accusam gloriatur sea, at aliquip appetere mei ?',
                'answer' => 'Ibh accumsan eu sit, homero rationibus percipitur in nam, sea ferri debet ad.Eu vel iusto recteque, mei iisque prompta eruditi ad, ut mel autem dicit putant. Ignota persius officiis eu vix. Nibh accumsan eu sit, homero rationibus percipitur in nam, sea ferri debet ad.',
                'faq_cat_id' => 2
            ],
            [
                'question' => 'Ea ius impetus accumsan facilisi. Simul atomorum scriptorem?',
                'answer' => 'Eam no cibo novum labores, timeam percipit an his. Has nonumes hendrerit at, no praesent voluptatum adversarium quo, ad mel pertinacia rationibus incorrupte.Mea te utamur abhorreant sententiae, ea alii graecis honestatis vix.',
                'faq_cat_id' => 1
            ],
            [
                'question' => 'Lorem ipsum dolor sit amet, ne sint vocent pri ?',
                'answer' => 'Eam sensibus petentium te, mea ad ignota eleifend. Mea te utamur abhorreant sententiae, ea alii graecis honestatis vix. Mea reque invenire ea, hinc admodum pri in, ipsum nostrud aliquid id has. Eu vel iusto recteque, mei iisque prompta eruditi ad, ut mel autem dicit putant. Ignota persius officiis eu vix. Nibh accumsan eu sit, homero rationibus percipitur in nam, sea ferri debet ad.',
                'faq_cat_id' => 3
            ],
            [
                'question' => 'vim eu cibo sonet noster. Vidit periculis conceptam est an ?',
                'answer' => 'Mei iisque prompta eruditi ad, ut mel autem dicit putant. Ignota persius officiis eu vix. Nibh accumsan eu sit, homero rationibus percipitur in nam, sea ferri debet ad.',
                'faq_cat_id' => 4
            ],
            [
                'question' => 'Ad accusam gloriatur sea, at aliquip appetere mei ?',
                'answer' => 'Ibh accumsan eu sit, homero rationibus percipitur in nam, sea ferri debet ad.Eu vel iusto recteque, mei iisque prompta eruditi ad, ut mel autem dicit putant. Ignota persius officiis eu vix. Nibh accumsan eu sit, homero rationibus percipitur in nam, sea ferri debet ad.',
                'faq_cat_id' => 1
            ],
            [
                'question' => 'Ea ius impetus accumsan facilisi. Simul atomorum scriptorem. ',
                'answer' => 'Eam no cibo novum labores, timeam percipit an his. Has nonumes hendrerit at, no praesent voluptatum adversarium quo, ad mel pertinacia rationibus incorrupte.Mea te utamur abhorreant sententiae, ea alii graecis honestatis vix.',
                'faq_cat_id' => 2
            ]
        ];

        foreach ($items as $item) {
            DB::table('faq_items')->insert([$item]);
        }
    }
}