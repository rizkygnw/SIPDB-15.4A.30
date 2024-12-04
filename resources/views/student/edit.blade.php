@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Student</h2>

        <!-- Form untuk mengedit data mahasiswa -->
        <form action="{{ route('student.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $student->name) }}" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="address" class="form-control" required>{{ old('address', $student->address) }}</textarea>
            </div>

            <div class="form-group">
                <label for="birth_date">Birth Date</label>
                <input type="date" name="birth_date" id="birth_date" class="form-control" value="{{ old('birth_date', $student->birth_date) }}" required>
            </div>

            <div class="form-group">
                <label for="school_origin">School Origin</label>
                <input type="text" name="school_origin" id="school_origin" class="form-control" value="{{ old('school_origin', $student->school_origin) }}" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="Active" {{ $student->status == 'Active' ? 'selected' : '' }}>Active</option>
                    <option value="Inactive" {{ $student->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Student</button>
            </div>
        </form>
    </div>
@endsection
