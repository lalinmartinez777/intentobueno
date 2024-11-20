<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clase;

class ClasesTableSeeder extends Seeder
{
    public function run()
    {
        Clase::create(['nombre' => 'idiomas', 'profesor_id' => 1]);
        Clase::create(['nombre' => 'arte', 'profesor_id' => 2]);
        Clase::create(['nombre' => 'deportes', 'profesor_id' => 3]);
    }
}
