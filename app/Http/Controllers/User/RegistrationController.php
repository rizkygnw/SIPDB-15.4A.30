<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Document;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $students = $user->students; // Use the relationship

        return view('user.registration.index', compact('students'));
    }

    public function create()
    {
        // Get all departments for the dropdown
        $departments = Department::all();
        return view('user.registration.create', compact('departments'));
    }

    public function store(Request $request)
    {
        // Validate form dataz`
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'birth_date' => 'required|date',
            'school_origin' => 'required|string|max:255',
            'departments' => 'required|array',
            'departments.*' => 'exists:departments,id',
            'file' => 'required|array',
            'file.*' => 'file|mimes:pdf,jpg,png,jpeg,docx|max:10240',
            'document_type' => 'required|array',
            'document_type.*' => 'string|max:255',
        ]);

        // Create student
        $student = Student::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'address' => $request->address,
            'birth_date' => $request->birth_date,
            'school_origin' => $request->school_origin,
            'status' => 'Pendaftaran',
        ]);

        // Sync departments
        $student->departments()->sync($request->departments);

        // Handle document uploads
        foreach ($request->file('file') as $index => $file) {
            $filePath = $file->store('documents', 'public');
            Document::create([
                'student_id' => $student->id,
                'file_path' => $filePath,
                'document_type' => $request->input('document_type')[$index],
            ]);
        }

        return redirect()->route('students.index')->with('success', 'Student registered successfully!');
    }
}
