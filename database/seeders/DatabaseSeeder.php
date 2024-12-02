<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserDataSeeder::class,
            StudentSeeder::class,
            DepartmentSeeder::class,
            DocumentSeeder::class,
            StudentDepartmentSeeder::class,
            RegistrationSeeder::class,
            PaymentSeeder::class,
            LogSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
