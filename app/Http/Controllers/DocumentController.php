<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        return view('document.index', compact('documents'));
    }

    public function create()
    {
        $students = Student::all(); // Ambil data student
        return view('document.create', compact('students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'document_type' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,jpg,png,docx|max:10240', // File type validation
        ]);

        // Proses unggah file
        $filePath = $request->file('file')->store('documents', 'public');

        // Menyimpan data ke database
        Document::create([
            'student_id' => $request->student_id,
            'document_type' => $request->document_type,
            'file_path' => $filePath,
        ]);

        return redirect()->route('documents.index')->with('success', 'Document uploaded successfully!');
    }

    public function edit(Document $document)
    {
        $students = Student::all();
        return view('document.edit', compact('document', 'students'));
    }

    public function update(Request $request, Document $document)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'document_type' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf,jpg,png,docx|max:10240',
        ]);

        $document->student_id = $request->student_id;
        $document->document_type = $request->document_type;

        if ($request->hasFile('file')) {
            // Hapus file lama
            Storage::delete('public/' . $document->file_path);
            // Unggah file baru
            $document->file_path = $request->file('file')->store('documents', 'public');
        }

        $document->save();

        return redirect()->route('documents.index')->with('success', 'Document updated successfully!');
    }

    public function destroy(Document $document)
    {
        Storage::delete('public/' . $document->file_path);
        $document->delete();

        return redirect()->route('documents.index')->with('success', 'Document deleted successfully!');
    }
}
