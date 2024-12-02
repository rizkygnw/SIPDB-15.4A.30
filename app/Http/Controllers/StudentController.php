<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(StudentRequest $request)
    {
        $validated = $request->validated();

        $example = Student::query()->create($validated);

        return response()->json($example, 201);
    }
}
