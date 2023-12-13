<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// model Centre
use App\Models\Centre;
// model Professorat
use App\Models\Professorat;
// model Alumnat
use App\Models\Alumnat;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Crea 30 elements en la tabla Centres
        Centre::factory(30)->create();

        // Crea 30 elements en la tabla Professorat
        Professorat::factory(30)->create();

        // Crea 30 elements en la tabla Alumnat
        Alumnat::factory(30)->create();
    }
}
