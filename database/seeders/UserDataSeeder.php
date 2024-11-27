<?php

namespace Database\Seeders;

use App\Models\UserData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserData::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        UserData::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);

        UserData::create([
            'name' => 'Rizky',
            'email' => 'rizky@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);

        UserData::create([
            'name' => 'Joan',
            'email' => 'joan@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);

        UserData::create([
            'name' => 'Roy',
            'email' => 'Roy@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);

        UserData::create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);
    }
}
