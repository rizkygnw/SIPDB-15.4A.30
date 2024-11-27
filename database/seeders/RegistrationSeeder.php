<?php

namespace Database\Seeders;

use App\Models\Registration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Symfony\Component\Clock\now;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Registration::create([
            'student_id' => 1,
            'registration_date' => now(),
            'status' => 'pending',
        ]);

        Registration::create([
            'student_id' => 2,
            'registration_date' => now(),
            'status' => 'accepted',
        ]);

        Registration::create([
            'student_id' => 3,
            'registration_date' => now(),
            'status' => 'accepted',
        ]);

        Registration::create([
            'student_id' => 4,
            'registration_date' => now(),
            'status' => 'accepted',
        ]);

        Registration::create([
            'student_id' => 5,
            'registration_date' => now(),
            'status' => 'accepted',
        ]);
    }
}
