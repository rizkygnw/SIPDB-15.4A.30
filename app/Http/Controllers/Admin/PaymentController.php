<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('student')->latest()->get();
        return view('admin.payments.index', compact('payments'));
    }

    public function create(Request $request)
    {
        // Agar berurutan sesuai huruf pertama
        // $search = $request->input('search'); // Ambil input pencarian
        // $students = Student::when($search, function ($query, $search) {
        //     $query->where('name', 'like', "%{$search}%"); // Filter berdasarkan nama
        // })->orderBy('name', 'asc')->get();
        $students = Student::orderBy('name', 'asc')->get();
        return view('admin.payments.create', compact('students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'payment_date' => 'required|date',
            'amount' => 'required|numeric|min:0',
            'receipt_number' => 'required|unique:payments,receipt_number',
        ]);

        Payment::create($request->all());

        $student = Student::find($request->student_id);
        $student->payment_status = 'Sudah Dibayar';
        $student->save();

        return redirect()->route('payments.index')->with('success', 'Payment added successfully.');
    }

    public function edit(Payment $payment)
    {
        $students = Student::all();
        return view('admin.payments.edit', compact('payment', 'students'));
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'payment_date' => 'required|date',
            'amount' => 'required|numeric|min:0',
            'receipt_number' => 'required|unique:payments,receipt_number,' . $payment->id,
        ]);

        $payment->update($request->all());

        return redirect()->route('payments.index')->with('success', 'Payment updated successfully.');
    }

    public function destroy(Payment $payment)
    {
        $deletedId = $payment->id;
        $payment->delete();

        Payment::where('id', '>', $deletedId)
                ->decrement('id', 1);

        $lastId = Payment::max('id');
        $newAutoIncrement = $lastId + 1;
        DB::statement("ALTER TABLE user_data AUTO_INCREMENT = $newAutoIncrement;");

        return redirect()->route('student.index')->with('success', 'Student deleted and auto increment updated successfully.');
    }
}
