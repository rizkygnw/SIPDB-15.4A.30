<?php

namespace Database\Seeders;

use App\Models\Log;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Log::create([
            'user_id' => 1,
            'activity' => 'Logged in to the system.',
        ]);

        Log::create([
            'user_id' => 2,
            'activity' => 'Logged out to the system.',
        ]);

        Log::create([
            'user_id' => 3,
            'activity' => 'Sign up to the system.',
        ]);

        Log::create([
            'user_id' => 4, // ID John Doe
            'activity' => 'Logged in to the system.',
        ]);

        Log::create([
            'user_id' => 5, // ID John Doe
            'activity' => 'Logged out to the system.',
        ]);
    }
}
