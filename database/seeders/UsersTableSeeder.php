<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Zakaria Author',
            'email' => 'author@test.com',
            'password' => Hash::make('password123'),
            'role' => User::ROLE_AUTHOR,
        ]);
    }
}
