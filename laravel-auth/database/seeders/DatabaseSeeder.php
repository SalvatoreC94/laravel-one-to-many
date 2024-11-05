<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Creazione di un utente predefinito con password hashata
        User::firstOrCreate(
            ['email' => 'user@example.com'],
            [
                'name' => 'user',
                'password' => Hash::make('password'), 
            ]
        );

        // Chiama il seeder per i progetti
        $this->call(ProjectSeeder::class);
    }
}


