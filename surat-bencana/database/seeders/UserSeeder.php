<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'level' => 'admin',
            'password' => Hash::make('admin123'),
            ],

            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'level' => 'user',
                'password' => Hash::make('user123'),
                ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
