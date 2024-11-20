<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ClaseEstudianteTableSeeder extends Seeder
{
    public function run()
    {
        // Asegúrate de que los usuarios existen
        $user1 = User::firstOrCreate(['id' => 2], [
            'name' => 'Ana Lopez',
            'email' => 'ana@example.com',
            'password' => bcrypt('password'),
        ]);

        $user2 = User::firstOrCreate(['id' => 3], [
            'name' => 'Carlos Garcia',
            'email' => 'carlos@example.com',
            'password' => bcrypt('password'),
        ]);

        // Insertar las relaciones en la tabla intermedia
        DB::table('clase_estudiante')->insert([
            ['clase_id' => 1, 'user_id' => $user1->id],
            ['clase_id' => 2, 'user_id' => $user1->id],
            ['clase_id' => 3, 'user_id' => $user2->id],
        ]);
    }
}
