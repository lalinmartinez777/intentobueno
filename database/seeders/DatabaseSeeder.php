<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear un usuario de prueba
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Llamar a los seeders adicionales
        $this->call([
            ProfesoresTableSeeder::class,
            ClasesTableSeeder::class,
            ClaseEstudianteTableSeeder::class,
            ClaseProfeTableSeeder::class,
        ]);
    }
}
