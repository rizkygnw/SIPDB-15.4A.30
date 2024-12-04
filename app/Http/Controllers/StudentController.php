<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\Models\User;

class StudentController extends Controller
{
    public function store(StudentRequest $request)
    {
        $validated = $request->validated();

        return response()->json(['message' => 'Validation successful.', 'data' => $validated], 200);
    }
}
