<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClaseProfeTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('clase_profe')->insert([
            ['clase_id' => 1, 'profesor_id' => 1],
            ['clase_id' => 2, 'profesor_id' => 2],
            ['clase_id' => 3, 'profesor_id' => 3],
        ]);
    }
}
