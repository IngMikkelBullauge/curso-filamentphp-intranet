<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Container\Attributes\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);

        User::factory()->create([
            'name' => 'Pruebas',
            'email' => 'pruebas@pruebas.com',
            'password' => Hash::make('pruebas'),
        ]);

    }
}
