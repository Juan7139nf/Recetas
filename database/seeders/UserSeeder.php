<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'juanerrors.nothing@gmail.com'], // Para evitar duplicados
            [
                'id' => 'hfJIGhd6d6aWQs0jd9hzU4q12jk2',
                'username' => 'Juan Nicolas Flores Delgado',
                'email_verified_at' => now(),
                'google_id' => 'hfJIGhd6d6aWQs0jd9hzU4q12jk2', // reloadUserInfo.localId
                'password' => Hash::make('Fortnite159'), // Contraseña
                'avatar' => ([
                    'url' => 'https://lh3.googleusercontent.com/a/ACg8ocK2J6hIVzPuvcW0zCUlaj9N9xG_B5bFBKB6Q-7pITsc4ydnKuA=s96-c'
                ]),
            ]
        );
        User::factory(10)->create();
    }
}
