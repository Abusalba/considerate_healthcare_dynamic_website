<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@salba.com',
            'password' => bcrypt('12345678'), // Use a secure password
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Regular User',
            'email' => 'user@salba.com',
            'password' => bcrypt('123456'), // Use a secure password
            'role' => 'user',
        ]);
    }
}

