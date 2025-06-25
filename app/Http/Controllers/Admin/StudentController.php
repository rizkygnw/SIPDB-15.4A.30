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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'address' => 'required|string',
            'birth_date' => 'required|date',
            'school_origin' => 'required|string',
            'status' => 'required|in:Pendaftaran,Seleksi,Tes Minat Bakat,Registrasi Ulang,Diterima,Ditolak',
        ]);

        DB::beginTransaction();
        try {
            // Buat data user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            // Buat data student
            Student::create([
                'user_id' => $user->id,
                'name' => $request->name,
                'address' => $request->address,
                'birth_date' => $request->birth_date,
                'school_origin' => $request->school_origin,
                'status' => $request->status,
            ]);

            DB::commit();

            return redirect()->route('students.index')->with('success', 'Student added successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => 'Failed to add student: ' . $e->getMessage()]);
        }
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
