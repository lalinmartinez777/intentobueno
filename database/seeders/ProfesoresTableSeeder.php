<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profesor;

class ProfesoresTableSeeder extends Seeder
{
    public function run()
    {
        Profesor::create(['nombre' => 'Juan Perez', 'email' => 'juan@example.com', 'especialidad' => 'idiomas']);
        Profesor::create(['nombre' => 'Maria Lopez', 'email' => 'maria@example.com', 'especialidad' => 'arte']);
        Profesor::create(['nombre' => 'Carlos Sanchez', 'email' => 'carlos@example.com', 'especialidad' => 'deporte']);
    }
}
