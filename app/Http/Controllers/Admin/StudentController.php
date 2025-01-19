<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil nilai pencarian dari request
        $search = $request->input('search');

        $students = Student::query();

        if ($search) {
            $students->where('name', 'LIKE', "%{$search}%");
        }

        $students = $students->get();

        return view('admin.students.index', compact('students'));
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.students.show', compact('student'));
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(Request $request)
    {
        $lastUser = User::orderBy('id', 'desc')->first();

        $userId = $lastUser ? $lastUser->id : 1;

        Student::create([
            'user_id' => $userId,
            'name' => $request->name,
            'address' => $request->address,
            'birth_date' => $request->birth_date,
            'school_origin' => $request->school_origin,
            'status' => $request->status,
        ]);

        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }

    public function update(StudentRequest $request, Student $student)
    {
        $student->update($request->validated());
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('admin.students.edit', compact('student'));
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student soft-deleted successfully.');
    }
}
