<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Menu::insert([
            ['name' => 'Dashboard', 'route' => 'dashboard', 'order' => 1],
            ['name' => 'Usuarios', 'route' => 'users.index', 'order' => 2],
        ]);
    }
}
