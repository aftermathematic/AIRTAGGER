<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class userAirtagTableSeeder extends Seeder
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
                'user_id'=>1,
                'airtag_id'=>1
                ],
                [
                'user_id'=>1,
                'airtag_id'=>2
                ],
                [
                'user_id'=>1,
                'airtag_id'=>3
                ],
                [
                'user_id'=>1,
                'airtag_id'=>4
                ],
                [
                'user_id'=>1,
                'airtag_id'=>5
                ],
                [
                'user_id'=>1,
                'airtag_id'=>6
                ],
                [
                'user_id'=>1,
                'airtag_id'=>7
                ],
                [
                'user_id'=>1,
                'airtag_id'=>8
                ],
                [
                'user_id'=>1,
                'airtag_id'=>9
                ],
                [
                'user_id'=>1,
                'airtag_id'=>10
                ],
                [
                'user_id'=>1,
                'airtag_id'=>11
                ],
                [
                'user_id'=>1,
                'airtag_id'=>12
                ],
                [
                'user_id'=>1,
                'airtag_id'=>13
                ],
                [
                'user_id'=>1,
                'airtag_id'=>14
                ],
                [
                'user_id'=>1,
                'airtag_id'=>15
                ],
                [
                'user_id'=>1,
                'airtag_id'=>16
                ],
                [
                'user_id'=>1,
                'airtag_id'=>17
                ],
                [
                'user_id'=>1,
                'airtag_id'=>18
                ],
                [
                'user_id'=>1,
                'airtag_id'=>19
                ],
                [
                'user_id'=>1,
                'airtag_id'=>20
                ],
                [
                'user_id'=>1,
                'airtag_id'=>21
                ],
                [
                'user_id'=>1,
                'airtag_id'=>22
                ],
                [
                'user_id'=>1,
                'airtag_id'=>23
                ],
                [
                'user_id'=>1,
                'airtag_id'=>24
                ],
                [
                'user_id'=>1,
                'airtag_id'=>25
                ],
                [
                'user_id'=>1,
                'airtag_id'=>26
                ],
                [
                'user_id'=>1,
                'airtag_id'=>27
                ],
                [
                'user_id'=>1,
                'airtag_id'=>28
                ],
                [
                'user_id'=>1,
                'airtag_id'=>29
                ],
                [
                'user_id'=>1,
                'airtag_id'=>30
                ],
                [
                'user_id'=>1,
                'airtag_id'=>31
                ],
                [
                'user_id'=>1,
                'airtag_id'=>32
                ],
                [
                'user_id'=>1,
                'airtag_id'=>33
                ],
                [
                'user_id'=>1,
                'airtag_id'=>34
                ],
                [
                'user_id'=>1,
                'airtag_id'=>35
                ],
                [
                'user_id'=>1,
                'airtag_id'=>36
                ],
                [
                'user_id'=>1,
                'airtag_id'=>37
                ],
                [
                'user_id'=>1,
                'airtag_id'=>38
                ],
                [
                'user_id'=>1,
                'airtag_id'=>39
                ],
                [
                'user_id'=>1,
                'airtag_id'=>40
                ],
                [
                'user_id'=>1,
                'airtag_id'=>41
                ],
                [
                'user_id'=>1,
                'airtag_id'=>42
                ],
                [
                'user_id'=>1,
                'airtag_id'=>43
                ],
                [
                'user_id'=>1,
                'airtag_id'=>44
                ],
                [
                'user_id'=>1,
                'airtag_id'=>45
                ],
                [
                'user_id'=>1,
                'airtag_id'=>46
                ],
                [
                'user_id'=>1,
                'airtag_id'=>47
                ],
                [
                'user_id'=>1,
                'airtag_id'=>48
                ],
                [
                'user_id'=>1,
                'airtag_id'=>49
                ],
                [
                'user_id'=>1,
                'airtag_id'=>50
                ],
                [
                'user_id'=>1,
                'airtag_id'=>51
                ],
                [
                'user_id'=>1,
                'airtag_id'=>52
                ],
                [
                'user_id'=>1,
                'airtag_id'=>53
                ],
                [
                'user_id'=>1,
                'airtag_id'=>54
                ],
                [
                'user_id'=>1,
                'airtag_id'=>55
                ],
                [
                'user_id'=>1,
                'airtag_id'=>56
                ],
                [
                'user_id'=>1,
                'airtag_id'=>57
                ],
                [
                'user_id'=>1,
                'airtag_id'=>58
                ],
                [
                'user_id'=>1,
                'airtag_id'=>59
                ],
                [
                'user_id'=>1,
                'airtag_id'=>60
                ],
                [
                'user_id'=>1,
                'airtag_id'=>61
                ],
                [
                'user_id'=>1,
                'airtag_id'=>62
                ],
                [
                'user_id'=>1,
                'airtag_id'=>63
                ],
                [
                'user_id'=>1,
                'airtag_id'=>64
                ],
                [
                'user_id'=>1,
                'airtag_id'=>65
                ],
                [
                'user_id'=>1,
                'airtag_id'=>66
                ],
                [
                'user_id'=>1,
                'airtag_id'=>67
                ],
                [
                'user_id'=>1,
                'airtag_id'=>68
                ],
                [
                'user_id'=>1,
                'airtag_id'=>69
                ],
                [
                'user_id'=>1,
                'airtag_id'=>70
                ],
                [
                'user_id'=>1,
                'airtag_id'=>71
                ],
                [
                'user_id'=>1,
                'airtag_id'=>72
                ],
                [
                'user_id'=>1,
                'airtag_id'=>73
                ],
                [
                'user_id'=>1,
                'airtag_id'=>74
                ],
                [
                'user_id'=>1,
                'airtag_id'=>75
                ],
                [
                'user_id'=>1,
                'airtag_id'=>76
                ],
                [
                'user_id'=>1,
                'airtag_id'=>77
                ],
                [
                'user_id'=>1,
                'airtag_id'=>78
                ],
                [
                'user_id'=>1,
                'airtag_id'=>79
                ],
                [
                'user_id'=>1,
                'airtag_id'=>80
                ],
                [
                'user_id'=>1,
                'airtag_id'=>81
                ],
                [
                'user_id'=>1,
                'airtag_id'=>82
                ],
                [
                'user_id'=>1,
                'airtag_id'=>83
                ],
                [
                'user_id'=>1,
                'airtag_id'=>84
                ],
                [
                'user_id'=>1,
                'airtag_id'=>85
                ],
                [
                'user_id'=>1,
                'airtag_id'=>86
                ],
                [
                'user_id'=>1,
                'airtag_id'=>87
                ],
                [
                'user_id'=>1,
                'airtag_id'=>88
                ],
                [
                'user_id'=>1,
                'airtag_id'=>89
                ],
                [
                'user_id'=>1,
                'airtag_id'=>90
                ],
                [
                'user_id'=>1,
                'airtag_id'=>91
                ],
                [
                'user_id'=>1,
                'airtag_id'=>92
                ],
                [
                'user_id'=>1,
                'airtag_id'=>93
                ],
                [
                'user_id'=>1,
                'airtag_id'=>94
                ],
                [
                'user_id'=>1,
                'airtag_id'=>95
                ],
                [
                'user_id'=>1,
                'airtag_id'=>96
                ],
                [
                'user_id'=>1,
                'airtag_id'=>97
                ],
                [
                'user_id'=>1,
                'airtag_id'=>98
                ],
                [
                'user_id'=>1,
                'airtag_id'=>99
                ],
                [
                'user_id'=>1,
                'airtag_id'=>100
                ],
                [
                'user_id'=>1,
                'airtag_id'=>101
                ],
                [
                'user_id'=>1,
                'airtag_id'=>102
                ],
                [
                'user_id'=>1,
                'airtag_id'=>103
                ],
                [
                'user_id'=>1,
                'airtag_id'=>104
                ],
                [
                'user_id'=>1,
                'airtag_id'=>105
                ],
                [
                'user_id'=>1,
                'airtag_id'=>106
                ],
                [
                'user_id'=>1,
                'airtag_id'=>107
                ],
                [
                'user_id'=>1,
                'airtag_id'=>108
                ],
                [
                'user_id'=>1,
                'airtag_id'=>109
                ],
                [
                'user_id'=>1,
                'airtag_id'=>110
                ],
                [
                'user_id'=>1,
                'airtag_id'=>111
                ],
                [
                'user_id'=>1,
                'airtag_id'=>112
                ],
                [
                'user_id'=>1,
                'airtag_id'=>113
                ],
                [
                'user_id'=>1,
                'airtag_id'=>114
                ],
                [
                'user_id'=>1,
                'airtag_id'=>115
                ],
                [
                'user_id'=>1,
                'airtag_id'=>116
                ],
                [
                'user_id'=>1,
                'airtag_id'=>117
                ],
                [
                'user_id'=>1,
                'airtag_id'=>118
                ],
                [
                'user_id'=>1,
                'airtag_id'=>119
                ],
                [
                'user_id'=>1,
                'airtag_id'=>120
                ],
                [
                'user_id'=>1,
                'airtag_id'=>121
                ],
                [
                'user_id'=>1,
                'airtag_id'=>122
                ],
                [
                'user_id'=>1,
                'airtag_id'=>123
                ],
                [
                'user_id'=>1,
                'airtag_id'=>124
                ],
                [
                'user_id'=>1,
                'airtag_id'=>125
                ],
                [
                'user_id'=>1,
                'airtag_id'=>126
                ],
                [
                'user_id'=>1,
                'airtag_id'=>127
                ],
                [
                'user_id'=>1,
                'airtag_id'=>128
                ],
                [
                'user_id'=>1,
                'airtag_id'=>129
                ],
                [
                'user_id'=>1,
                'airtag_id'=>130
                ],
                [
                'user_id'=>1,
                'airtag_id'=>131
                ],
                [
                'user_id'=>1,
                'airtag_id'=>132
                ],
                [
                'user_id'=>1,
                'airtag_id'=>133
                ],
                [
                'user_id'=>1,
                'airtag_id'=>134
                ],
                [
                'user_id'=>1,
                'airtag_id'=>135
                ],
                [
                'user_id'=>1,
                'airtag_id'=>136
                ],
                [
                'user_id'=>1,
                'airtag_id'=>137
                ],
                [
                'user_id'=>1,
                'airtag_id'=>138
                ],
                [
                'user_id'=>1,
                'airtag_id'=>139
                ],
                [
                'user_id'=>1,
                'airtag_id'=>140
                ],
                [
                'user_id'=>1,
                'airtag_id'=>141
                ],
                [
                'user_id'=>1,
                'airtag_id'=>142
                ],
                [
                'user_id'=>1,
                'airtag_id'=>143
                ],
                [
                'user_id'=>1,
                'airtag_id'=>144
                ],
                [
                'user_id'=>1,
                'airtag_id'=>145
                ],
                [
                'user_id'=>1,
                'airtag_id'=>146
                ],
                [
                'user_id'=>1,
                'airtag_id'=>147
                ],
                [
                'user_id'=>1,
                'airtag_id'=>148
                ],
                [
                'user_id'=>1,
                'airtag_id'=>149
                ],
                [
                'user_id'=>1,
                'airtag_id'=>150
                ],
                [
                'user_id'=>1,
                'airtag_id'=>151
                ],
                [
                'user_id'=>1,
                'airtag_id'=>152
                ],
                [
                'user_id'=>1,
                'airtag_id'=>153
                ],
                [
                'user_id'=>1,
                'airtag_id'=>154
                ],
                [
                'user_id'=>1,
                'airtag_id'=>155
                ],
                [
                'user_id'=>1,
                'airtag_id'=>156
                ],
                [
                'user_id'=>1,
                'airtag_id'=>157
                ],
                [
                'user_id'=>1,
                'airtag_id'=>158
                ],
                [
                'user_id'=>1,
                'airtag_id'=>159
                ],
                [
                'user_id'=>1,
                'airtag_id'=>160
                ],
                [
                'user_id'=>1,
                'airtag_id'=>161
                ],
                [
                'user_id'=>1,
                'airtag_id'=>162
                ],
                [
                'user_id'=>1,
                'airtag_id'=>163
                ],
                [
                'user_id'=>1,
                'airtag_id'=>164
                ],
                [
                'user_id'=>1,
                'airtag_id'=>165
                ],
                [
                'user_id'=>1,
                'airtag_id'=>166
                ],
                [
                'user_id'=>1,
                'airtag_id'=>167
                ],
                [
                'user_id'=>1,
                'airtag_id'=>168
                ],
                [
                'user_id'=>1,
                'airtag_id'=>169
                ],
                [
                'user_id'=>1,
                'airtag_id'=>170
                ],
                [
                'user_id'=>1,
                'airtag_id'=>171
                ],
                [
                'user_id'=>1,
                'airtag_id'=>172
                ],
                [
                'user_id'=>1,
                'airtag_id'=>173
                ],
                [
                'user_id'=>1,
                'airtag_id'=>174
                ],
                [
                'user_id'=>1,
                'airtag_id'=>175
                ],
                [
                'user_id'=>1,
                'airtag_id'=>176
                ],
                [
                'user_id'=>1,
                'airtag_id'=>177
                ],
                [
                'user_id'=>1,
                'airtag_id'=>178
                ],
                [
                'user_id'=>1,
                'airtag_id'=>179
                ],
                [
                'user_id'=>1,
                'airtag_id'=>180
                ],
                [
                'user_id'=>1,
                'airtag_id'=>181
                ],
                [
                'user_id'=>1,
                'airtag_id'=>182
                ],
                [
                'user_id'=>2,
                'airtag_id'=>1
                ],
                [
                'user_id'=>2,
                'airtag_id'=>2
                ],
                [
                'user_id'=>2,
                'airtag_id'=>3
                ],
                [
                'user_id'=>2,
                'airtag_id'=>4
                ],
                [
                'user_id'=>2,
                'airtag_id'=>5
                ],
                [
                'user_id'=>2,
                'airtag_id'=>6
                ],
                [
                'user_id'=>2,
                'airtag_id'=>7
                ],
                [
                'user_id'=>2,
                'airtag_id'=>8
                ],
                [
                'user_id'=>2,
                'airtag_id'=>9
                ],
                [
                'user_id'=>2,
                'airtag_id'=>10
                ],
                [
                'user_id'=>2,
                'airtag_id'=>11
                ],
                [
                'user_id'=>2,
                'airtag_id'=>12
                ],
                [
                'user_id'=>2,
                'airtag_id'=>13
                ],
                [
                'user_id'=>2,
                'airtag_id'=>14
                ],
                [
                'user_id'=>2,
                'airtag_id'=>15
                ],
                [
                'user_id'=>2,
                'airtag_id'=>16
                ],
                [
                'user_id'=>2,
                'airtag_id'=>17
                ],
                [
                'user_id'=>2,
                'airtag_id'=>18
                ],
                [
                'user_id'=>2,
                'airtag_id'=>19
                ],
                [
                'user_id'=>2,
                'airtag_id'=>20
                ],
                [
                'user_id'=>2,
                'airtag_id'=>21
                ],
                [
                'user_id'=>2,
                'airtag_id'=>22
                ],
                [
                'user_id'=>2,
                'airtag_id'=>23
                ],
                [
                'user_id'=>2,
                'airtag_id'=>24
                ],
                [
                'user_id'=>2,
                'airtag_id'=>25
                ],
                [
                'user_id'=>2,
                'airtag_id'=>26
                ],
                [
                'user_id'=>2,
                'airtag_id'=>27
                ],
                [
                'user_id'=>2,
                'airtag_id'=>28
                ],
                [
                'user_id'=>2,
                'airtag_id'=>29
                ],
                [
                'user_id'=>2,
                'airtag_id'=>30
                ],
                [
                'user_id'=>2,
                'airtag_id'=>31
                ],
                [
                'user_id'=>2,
                'airtag_id'=>32
                ],
                [
                'user_id'=>2,
                'airtag_id'=>33
                ],
                [
                'user_id'=>2,
                'airtag_id'=>34
                ],
                [
                'user_id'=>2,
                'airtag_id'=>35
                ],
                [
                'user_id'=>2,
                'airtag_id'=>36
                ],
                [
                'user_id'=>2,
                'airtag_id'=>37
                ],
                [
                'user_id'=>2,
                'airtag_id'=>38
                ],
                [
                'user_id'=>2,
                'airtag_id'=>39
                ],
                [
                'user_id'=>2,
                'airtag_id'=>40
                ],
                [
                'user_id'=>2,
                'airtag_id'=>41
                ],
                [
                'user_id'=>2,
                'airtag_id'=>42
                ],
                [
                'user_id'=>2,
                'airtag_id'=>43
                ],
                [
                'user_id'=>2,
                'airtag_id'=>44
                ],
                [
                'user_id'=>2,
                'airtag_id'=>45
                ],
                [
                'user_id'=>2,
                'airtag_id'=>46
                ],
                [
                'user_id'=>2,
                'airtag_id'=>47
                ],
                [
                'user_id'=>2,
                'airtag_id'=>48
                ],
                [
                'user_id'=>2,
                'airtag_id'=>49
                ],
                [
                'user_id'=>2,
                'airtag_id'=>50
                ],
                [
                'user_id'=>2,
                'airtag_id'=>51
                ],
                [
                'user_id'=>2,
                'airtag_id'=>52
                ],
                [
                'user_id'=>2,
                'airtag_id'=>53
                ],
                [
                'user_id'=>2,
                'airtag_id'=>54
                ],
                [
                'user_id'=>2,
                'airtag_id'=>55
                ],
                [
                'user_id'=>2,
                'airtag_id'=>56
                ],
                [
                'user_id'=>2,
                'airtag_id'=>57
                ],
                [
                'user_id'=>2,
                'airtag_id'=>58
                ],
                [
                'user_id'=>2,
                'airtag_id'=>59
                ],
                [
                'user_id'=>2,
                'airtag_id'=>60
                ],
                [
                'user_id'=>2,
                'airtag_id'=>61
                ],
                [
                'user_id'=>2,
                'airtag_id'=>62
                ],
                [
                'user_id'=>2,
                'airtag_id'=>63
                ],
                [
                'user_id'=>2,
                'airtag_id'=>64
                ],
                [
                'user_id'=>2,
                'airtag_id'=>65
                ],
                [
                'user_id'=>2,
                'airtag_id'=>66
                ],
                [
                'user_id'=>2,
                'airtag_id'=>67
                ],
                [
                'user_id'=>2,
                'airtag_id'=>68
                ],
                [
                'user_id'=>2,
                'airtag_id'=>69
                ],
                [
                'user_id'=>2,
                'airtag_id'=>70
                ],
                [
                'user_id'=>2,
                'airtag_id'=>71
                ],
                [
                'user_id'=>2,
                'airtag_id'=>72
                ],
                [
                'user_id'=>2,
                'airtag_id'=>73
                ],
                [
                'user_id'=>2,
                'airtag_id'=>74
                ],
                [
                'user_id'=>2,
                'airtag_id'=>75
                ],
                [
                'user_id'=>2,
                'airtag_id'=>76
                ],
                [
                'user_id'=>2,
                'airtag_id'=>77
                ],
                [
                'user_id'=>2,
                'airtag_id'=>78
                ],
                [
                'user_id'=>2,
                'airtag_id'=>79
                ],
                [
                'user_id'=>2,
                'airtag_id'=>80
                ],
                [
                'user_id'=>2,
                'airtag_id'=>81
                ],
                [
                'user_id'=>2,
                'airtag_id'=>82
                ],
                [
                'user_id'=>2,
                'airtag_id'=>83
                ],
                [
                'user_id'=>2,
                'airtag_id'=>84
                ],
                [
                'user_id'=>2,
                'airtag_id'=>85
                ],
                [
                'user_id'=>2,
                'airtag_id'=>86
                ],
                [
                'user_id'=>2,
                'airtag_id'=>87
                ],
                [
                'user_id'=>2,
                'airtag_id'=>88
                ],
                [
                'user_id'=>2,
                'airtag_id'=>89
                ],
                [
                'user_id'=>2,
                'airtag_id'=>90
                ],
                [
                'user_id'=>2,
                'airtag_id'=>91
                ],
                [
                'user_id'=>2,
                'airtag_id'=>92
                ],
                [
                'user_id'=>2,
                'airtag_id'=>93
                ],
                [
                'user_id'=>2,
                'airtag_id'=>94
                ],
                [
                'user_id'=>2,
                'airtag_id'=>95
                ],
                [
                'user_id'=>2,
                'airtag_id'=>96
                ],
                [
                'user_id'=>2,
                'airtag_id'=>97
                ],
                [
                'user_id'=>2,
                'airtag_id'=>98
                ],
                [
                'user_id'=>2,
                'airtag_id'=>99
                ],
                [
                'user_id'=>2,
                'airtag_id'=>100
                ],
                [
                'user_id'=>2,
                'airtag_id'=>101
                ],
                [
                'user_id'=>2,
                'airtag_id'=>102
                ],
                [
                'user_id'=>2,
                'airtag_id'=>103
                ],
                [
                'user_id'=>2,
                'airtag_id'=>104
                ],
                [
                'user_id'=>2,
                'airtag_id'=>105
                ],
                [
                'user_id'=>2,
                'airtag_id'=>106
                ],
                [
                'user_id'=>2,
                'airtag_id'=>107
                ],
                [
                'user_id'=>2,
                'airtag_id'=>108
                ],
                [
                'user_id'=>2,
                'airtag_id'=>109
                ],
                [
                'user_id'=>2,
                'airtag_id'=>110
                ],
                [
                'user_id'=>2,
                'airtag_id'=>111
                ],
                [
                'user_id'=>2,
                'airtag_id'=>112
                ],
                [
                'user_id'=>2,
                'airtag_id'=>113
                ],
                [
                'user_id'=>2,
                'airtag_id'=>114
                ],
                [
                'user_id'=>2,
                'airtag_id'=>115
                ],
                [
                'user_id'=>2,
                'airtag_id'=>116
                ],
                [
                'user_id'=>2,
                'airtag_id'=>117
                ],
                [
                'user_id'=>2,
                'airtag_id'=>118
                ],
                [
                'user_id'=>2,
                'airtag_id'=>119
                ],
                [
                'user_id'=>2,
                'airtag_id'=>120
                ],
                [
                'user_id'=>2,
                'airtag_id'=>121
                ],
                [
                'user_id'=>2,
                'airtag_id'=>122
                ],
                [
                'user_id'=>2,
                'airtag_id'=>123
                ],
                [
                'user_id'=>2,
                'airtag_id'=>124
                ],
                [
                'user_id'=>2,
                'airtag_id'=>125
                ],
                [
                'user_id'=>2,
                'airtag_id'=>126
                ],
                [
                'user_id'=>2,
                'airtag_id'=>127
                ],
                [
                'user_id'=>2,
                'airtag_id'=>128
                ],
                [
                'user_id'=>2,
                'airtag_id'=>129
                ],
                [
                'user_id'=>2,
                'airtag_id'=>130
                ],
                [
                'user_id'=>2,
                'airtag_id'=>131
                ],
                [
                'user_id'=>2,
                'airtag_id'=>132
                ],
                [
                'user_id'=>2,
                'airtag_id'=>133
                ],
                [
                'user_id'=>2,
                'airtag_id'=>134
                ],
                [
                'user_id'=>2,
                'airtag_id'=>135
                ],
                [
                'user_id'=>2,
                'airtag_id'=>136
                ],
                [
                'user_id'=>2,
                'airtag_id'=>137
                ],
                [
                'user_id'=>2,
                'airtag_id'=>138
                ],
                [
                'user_id'=>2,
                'airtag_id'=>139
                ],
                [
                'user_id'=>2,
                'airtag_id'=>140
                ],
                [
                'user_id'=>2,
                'airtag_id'=>141
                ],
                [
                'user_id'=>2,
                'airtag_id'=>142
                ],
                [
                'user_id'=>2,
                'airtag_id'=>143
                ],
                [
                'user_id'=>2,
                'airtag_id'=>144
                ],
                [
                'user_id'=>2,
                'airtag_id'=>145
                ],
                [
                'user_id'=>2,
                'airtag_id'=>146
                ],
                [
                'user_id'=>2,
                'airtag_id'=>147
                ],
                [
                'user_id'=>2,
                'airtag_id'=>148
                ],
                [
                'user_id'=>2,
                'airtag_id'=>149
                ],
                [
                'user_id'=>2,
                'airtag_id'=>150
                ],
                [
                'user_id'=>2,
                'airtag_id'=>151
                ],
                [
                'user_id'=>2,
                'airtag_id'=>152
                ],
                [
                'user_id'=>2,
                'airtag_id'=>153
                ],
                [
                'user_id'=>2,
                'airtag_id'=>154
                ],
                [
                'user_id'=>2,
                'airtag_id'=>155
                ],
                [
                'user_id'=>2,
                'airtag_id'=>156
                ],
                [
                'user_id'=>2,
                'airtag_id'=>157
                ],
                [
                'user_id'=>2,
                'airtag_id'=>158
                ],
                [
                'user_id'=>2,
                'airtag_id'=>159
                ],
                [
                'user_id'=>2,
                'airtag_id'=>160
                ],
                [
                'user_id'=>2,
                'airtag_id'=>161
                ],
                [
                'user_id'=>2,
                'airtag_id'=>162
                ],
                [
                'user_id'=>2,
                'airtag_id'=>163
                ],
                [
                'user_id'=>2,
                'airtag_id'=>164
                ],
                [
                'user_id'=>2,
                'airtag_id'=>165
                ],
                [
                'user_id'=>2,
                'airtag_id'=>166
                ],
                [
                'user_id'=>2,
                'airtag_id'=>167
                ],
                [
                'user_id'=>2,
                'airtag_id'=>168
                ],
                [
                'user_id'=>2,
                'airtag_id'=>169
                ],
                [
                'user_id'=>2,
                'airtag_id'=>170
                ],
                [
                'user_id'=>2,
                'airtag_id'=>171
                ],
                [
                'user_id'=>2,
                'airtag_id'=>172
                ],
                [
                'user_id'=>2,
                'airtag_id'=>173
                ],
                [
                'user_id'=>2,
                'airtag_id'=>174
                ],
                [
                'user_id'=>2,
                'airtag_id'=>175
                ],
                [
                'user_id'=>2,
                'airtag_id'=>176
                ],
                [
                'user_id'=>2,
                'airtag_id'=>177
                ],
                [
                'user_id'=>2,
                'airtag_id'=>178
                ],
                [
                'user_id'=>2,
                'airtag_id'=>179
                ],
                [
                'user_id'=>2,
                'airtag_id'=>180
                ],
                [
                'user_id'=>2,
                'airtag_id'=>181
                ],
                [
                'user_id'=>2,
                'airtag_id'=>182
                ]
    
        ];

        foreach ($items as $item) {
            DB::table('users_airtags')->insert([$item]);
        }


    }
}
