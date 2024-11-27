<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student_department')->insert([
            ['student_id' => 1, 'department_id' => 1],
        ]);

        DB::table('student_department')->insert([
            ['student_id' => 2, 'department_id' => 2],
        ]);

        DB::table('student_department')->insert([
            ['student_id' => 3, 'department_id' => 2],
        ]);

        DB::table('student_department')->insert([
            ['student_id' => 4, 'department_id' => 3],
        ]);

        DB::table('student_department')->insert([
            ['student_id' => 5, 'department_id' => 1],
        ]);
    }
}
