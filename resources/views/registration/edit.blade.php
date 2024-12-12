@extends('layout')

@section('content')
    <div class="container">
        <h1>Edit Registration</h1>

        <form action="{{ route('registrations.update', $registration->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="student_id">Student</label>
                <select name="student_id" id="student_id" class="form-control" required>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}" {{ $student->id == $registration->student_id ? 'selected' : '' }}>
                            {{ $student->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="registration_date">Registration Date</label>
                <input type="date" name="registration_date" id="registration_date" class="form-control" value="{{ $registration->registration_date }}" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" id="status" class="form-control" value="{{ $registration->status }}" required>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
