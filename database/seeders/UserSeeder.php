<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'Default Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('asdasd'),
            'avatar' => null,
            'role_id' => Role::where('name', 'admin')->first()->id,
        ]);

        User::create([
            'username' => 'Default Teacher',
            'email' => 'teacher@example.com',
            'password' => Hash::make('asdasd'),
            'avatar' => null,
            'role_id' => Role::where('name', 'teacher')->first()->id,
        ]);

        User::create([
            'username' => 'Default Student',
            'email' => 'student@example.com',
            'password' => Hash::make('asdasd'),
            'avatar' => null,
            'role_id' => Role::where('name', 'student')->first()->id,
        ]);
    }
}
