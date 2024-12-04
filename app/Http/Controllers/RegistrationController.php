<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::with('student')->get();
        return view('registration.index', compact('registrations'));
    }

    public function create()
    {
        $students = Student::all();
        return view('registration.create', compact('students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'registration_date' => 'required|date',
            'status' => 'required|string',
        ]);

        Registration::create($request->all());

        return redirect()->route('registrations.index')->with('success', 'Registration created successfully.');
    }

    public function edit(Registration $registration)
    {
        $students = Student::all();
        return view('registration.edit', compact('registration', 'students'));
    }

    public function update(Request $request, Registration $registration)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'registration_date' => 'required|date',
            'status' => 'required|string',
        ]);

        $registration->update($request->all());

        return redirect()->route('registration.index')->with('success', 'Registration updated successfully.');
    }

    public function destroy(Registration $registration)
    {
        $deletedId = $registration->id;
        $registration->delete();

        Registration::where('id', '>', $deletedId)
                ->decrement('id', 1);

        $lastId = Registration::max('id');
        $newAutoIncrement = $lastId + 1;
        DB::statement("ALTER TABLE user_data AUTO_INCREMENT = $newAutoIncrement;");

        return redirect()->route('student.index')->with('success', 'Student deleted and auto increment updated successfully.');
    }
}
