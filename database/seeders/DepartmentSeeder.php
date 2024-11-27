<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create(['name' => 'Science']);
        Department::create(['name' => 'Arts']);
        Department::create(['name' => 'Commerce']);
        Department::create(['name' => 'Computer']);
        Department::create(['name' => 'Accounting']);
    }
}
