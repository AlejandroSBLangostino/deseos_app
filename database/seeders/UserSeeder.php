<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@deseos.dev'],
            [
                'name' => 'Administrador',
                'password' => Hash::make('admin12345'), // cambiar luego
                'email_verified_at' => now(),
            ]
        );

        User::updateOrCreate(
            ['email' => 'user@deseos.dev'],
            [
                'name' => 'Usuario',
                'password' => Hash::make('user12345'),
                'email_verified_at' => now(),
            ]
        );
    }
}