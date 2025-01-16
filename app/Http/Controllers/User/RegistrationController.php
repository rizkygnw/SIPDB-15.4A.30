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
        // Get the currently logged-in user
        $user = Auth::user();

        // Get students associated with the logged-in user
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
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'birth_date' => 'required|date',
            'school_origin' => 'required|string|max:255',
            'departments' => 'required|array',
            'departments.*' => 'exists:departments,id',
            'document_type' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,jpg,png,docx|max:10240',
        ]);
        if (Student::where('user_id', Auth::id())->exists()) {
            return redirect()->back()->withErrors(['error' => 'You have already registered.']);
        }

        // Create the student and associate it with the logged-in user
        $student = Student::create([
            'user_id' => Auth::id(), // Associate the student with the currently logged-in user
            'name' => $request->name,
            'address' => $request->address,
            'birth_date' => $request->birth_date,
            'school_origin' => $request->school_origin,
            'status' => 'Pendaftaran', // Set default status as Pendaftaran
        ]);

        // Sync departments (many-to-many relationship)
        $student->departments()->sync($request->departments);

        // Handle document upload
        $filePath = $request->file('file')->store('documents', 'public');

        // Save the document information in the Document table
        Document::create([
            'student_id' => $student->id,
            'document_type' => $request->document_type,
            'file_path' => $filePath,
        ]);

        // Redirect back with a success message
        return redirect()->route('students.index')->with('success', 'Student registered successfully!');
    }
}
