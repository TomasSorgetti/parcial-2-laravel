<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::insert([
            ['name' => 'admin', 'description' => 'Super administrador'],
            ['name' => 'teacher', 'description' => 'Teacher or institution'],
            ['name' => 'student', 'description' => 'Student'],
        ]);
    }
}
