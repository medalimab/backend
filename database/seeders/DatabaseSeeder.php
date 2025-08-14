<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Utilisateur par défaut (évite les doublons)
        User::updateOrCreate(
            ['email' => 'demo@user.com'],
            [
                'name' => 'User',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ]
        );

        // Ajout d'un admin personnalisé (évite les doublons)
        User::updateOrCreate(
            ['email' => 'test@gmail.com'],
            [
                'name' => 'test',
                'email_verified_at' => now(),
                'password' => Hash::make('test123'),
                'remember_token' => Str::random(10),
            ]
        );
    }
}
