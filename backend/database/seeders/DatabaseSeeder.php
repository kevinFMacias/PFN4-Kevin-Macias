<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $alumnoSeeder = new PersonaSeeder();
        $alumnoSeeder->run();

        $maestroSeeder = new PaginaSeeder();
        $maestroSeeder->run();

        $cursoSeeder = new RolSeeder();
        $cursoSeeder->run();

        $matriculaSeeder = new UsuarioSeeder();
        $matriculaSeeder->run();

        $asistenciaSeeder = new BitacoraSeeder();
        $asistenciaSeeder->run();

        $asistenciaSeeder = new EnlaceSeeder();
        $asistenciaSeeder->run();


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}