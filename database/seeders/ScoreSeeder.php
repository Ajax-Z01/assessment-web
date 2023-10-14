<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'verbal_sw' => 11,
                'verbal_kat' => 4,
                'numeric_sw' => 3,
                'numeric_kat' => 12,
                'abstract_sw' => 4,
                'abstract_kat' => 30,
                'total_score' => 117,
                'iq' => 4,
            ],
            [
                'user_id' => 2,
                'verbal_sw' => 7,
                'verbal_kat' => 3,
                'numeric_sw' => 2,
                'numeric_kat' => 7,
                'abstract_sw' => 3,
                'abstract_kat' => 18,
                'total_score' => 93,
                'iq' => 3,
            ],
            [
                'user_id' => 3,
                'verbal_sw' => 10,
                'verbal_kat' => 4,
                'numeric_sw' => 2,
                'numeric_kat' => 8,
                'abstract_sw' => 3,
                'abstract_kat' => 21,
                'total_score' => 99,
                'iq' => 3,
            ],
            [
                'user_id' => 4,
                'verbal_sw' => 3,
                'verbal_kat' => 2,
                'numeric_sw' => 3,
                'numeric_kat' => 8,
                'abstract_sw' => 3,
                'abstract_kat' => 17,
                'total_score' => 91,
                'iq' => 3,
            ],
            [
                'user_id' => 5,
                'verbal_sw' => 12,
                'verbal_kat' => 4,
                'numeric_sw' => 3,
                'numeric_kat' => 11,
                'abstract_sw' => 4,
                'abstract_kat' => 29,
                'total_score' => 115,
                'iq' => 4,
            ],
            [
                'user_id' => 6,
                'verbal_sw' => 10,
                'verbal_kat' => 4,
                'numeric_sw' => 7,
                'numeric_kat' => 3,
                'abstract_sw' => 16,
                'abstract_kat' => 6,
                'total_score' => 33,
                'iq' => 124,
            ],
            [
                'user_id' => 7,
                'verbal_sw' => 12,
                'verbal_kat' => 4,
                'numeric_sw' => 7,
                'numeric_kat' => 3,
                'abstract_sw' => 11,
                'abstract_kat' => 4,
                'total_score' => 30,
                'iq' => 117,
            ],
            [
                'user_id' => 8,
                'verbal_sw' => 11,
                'verbal_kat' => 4,
                'numeric_sw' => 8,
                'numeric_kat' => 3,
                'abstract_sw' => 12,
                'abstract_kat' => 4,
                'total_score' => 31,
                'iq' => 120,
            ],
            [
                'user_id' => 9,
                'verbal_sw' => 11,
                'verbal_kat' => 4,
                'numeric_sw' => 10,
                'numeric_kat' => 4,
                'abstract_sw' => 14,
                'abstract_kat' => 5,
                'total_score' => 35,
                'iq' => 129,
            ],
            [
                'user_id' => 10,
                'verbal_sw' => 11,
                'verbal_kat' => 4,
                'numeric_sw' => 10,
                'numeric_kat' => 4,
                'abstract_sw' => 15,
                'abstract_kat' => 5,
                'total_score' => 36,
                'iq' => 130,
            ],
            [
                'user_id' => 11,
                'verbal_sw' => 11,
                'verbal_kat' => 4,
                'numeric_sw' => 7,
                'numeric_kat' => 3,
                'abstract_sw' => 11,
                'abstract_kat' => 4,
                'total_score' => 29,
                'iq' => 115,
            ],
        ];

        DB::table('scores')->insert($data);
    }
}
