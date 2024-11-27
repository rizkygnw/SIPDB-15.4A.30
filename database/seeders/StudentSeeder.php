<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'user_id' => 2,
            'name' => 'John Doe',
            'address' => '123 Main Street',
            'birth_date' => '2005-06-15',
            'school_origin' => 'High School C',
            'status' => 'active',
        ]);

        Student::create([
            'user_id' => 3, // ID dari user John Doe
            'name' => 'Rizky',
            'address' => 'Merdeka',
            'birth_date' => '2004-01-01',
            'school_origin' => 'High School A',
            'status' => 'active',
        ]);

        Student::create([
            'user_id' => 4, // ID dari user John Doe
            'name' => 'Joan',
            'address' => 'Tanjung Hulu',
            'birth_date' => '2004-09-25',
            'school_origin' => 'High School B',
            'status' => 'active',
        ]);

        Student::create([
            'user_id' => 5, // ID dari user John Doe
            'name' => 'Roy',
            'address' => 'Tanjung Hulu',
            'birth_date' => '2003-01-12',
            'school_origin' => 'High School A',
            'status' => 'active',
        ]);

        Student::create([
            'user_id' => 6, // ID dari user John Doe
            'name' => 'Jane Doe',
            'address' => '321 Main Street',
            'birth_date' => '2005-08-20',
            'school_origin' => 'High School B',
            'status' => 'active',
        ]);
    }
}
