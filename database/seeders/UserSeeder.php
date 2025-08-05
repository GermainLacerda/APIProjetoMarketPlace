<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Germain Aroucha',
                'email' => 'Germain@example.com',
                'password' => Hash::make('senha123'),
            ],
            [
                'name' => 'Maria Silva',
                'email' => 'maria@example.com',
                'password' => Hash::make('senha123'),
            ],
            [
                'name' => 'João Souza',
                'email' => 'joao@example.com',
                'password' => Hash::make('senha123'),
            ],
            [
                'name' => 'Ana Pereira',
                'email' => 'ana@example.com',
                'password' => Hash::make('senha123'),
            ],
            [
                'name' => 'Carlos Oliveira',
                'email' => 'carlos@example.com',
                'password' => Hash::make('senha123'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
