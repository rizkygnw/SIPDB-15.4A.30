@extends('layout')

@section('content')
<div class="container">
    <h1>Edit Payment</h1>
    <form action="{{ route('payments.update', $payment) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="student_id" class="form-label">Student</label>
            <select name="student_id" id="student_id" class="form-control">
                @foreach ($students as $student)
                <option value="{{ $student->id }}" {{ $student->id == $payment->student_id ? 'selected' : '' }}>
                    {{ $student->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="payment_date" class="form-label">Payment Date</label>
            <input type="date" name="payment_date" id="payment_date" class="form-control" value="{{ $payment->payment_date }}">
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" step="0.01" name="amount" id="amount" class="form-control" value="{{ $payment->amount }}">
        </div>
        <div class="mb-3">
            <label for="receipt_number" class="form-label">Receipt Number</label>
            <input type="text" name="receipt_number" id="receipt_number" class="form-control" value="{{ $payment->receipt_number }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
