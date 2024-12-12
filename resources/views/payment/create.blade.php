@extends('layout')

@section('content')
<div class="container">
    <h1>Add Payment</h1>
    <form action="{{ route('payments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="student_id" class="form-label">Student</label>
            <select name="student_id" id="student_id" class="form-control">
                @foreach ($students as $student)
                <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="payment_date" class="form-label">Payment Date</label>
            <input type="date" name="payment_date" id="payment_date" class="form-control">
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" step="0.01" name="amount" id="amount" class="form-control">
        </div>
        <div class="mb-3">
            <label for="receipt_number" class="form-label">Receipt Number</label>
            <input type="text" name="receipt_number" id="receipt_number" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
