<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\Models\UserData;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        // return request()->user(); informasi pengguna login
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(StudentRequest $request)
    {
        $lastUser = UserData::orderBy('id', 'desc')->first();

        $userId = $lastUser ? $lastUser->id : 1;

        Student::create([
            'user_id' => $userId,
            'name' => $request->name,
            'address' => $request->address,
            'birth_date' => $request->birth_date,
            'school_origin' => $request->school_origin,
            'status' => $request->status,
        ]);

        return redirect()->route('student.index')->with('success', 'Student added successfully.');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('student.edit', compact('student'));
    }

    public function update(StudentRequest $request, Student $student)
    {
        $student->update($request->validated());
        return redirect()->route('student.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $deletedId = $student->id;
        $student->delete();

        Student::where('id', '>', $deletedId)
                ->decrement('id', 1);

        $lastId = Student::max('id');
        $newAutoIncrement = $lastId + 1;
        DB::statement("ALTER TABLE user_data AUTO_INCREMENT = $newAutoIncrement;");

        return redirect()->route('student.index')->with('success', 'Student deleted and auto increment updated successfully.');
    }
}
