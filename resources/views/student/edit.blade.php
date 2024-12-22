@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <!-- Card Header -->
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Edit Student</h3>
        </div>

        <!-- Card Body -->
        <div class="card-body">
            <form action="{{ route('student.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Name Field -->
                <div class="mb-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control form-control-lg" value="{{ old('name', $student->name) }}" required>
                </div>

                <!-- Address Field -->
                <div class="mb-4">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" id="address" class="form-control form-control-lg" required>{{ old('address', $student->address) }}</textarea>
                </div>

                <!-- Birth Date Field -->
                <div class="mb-4">
                    <label for="birth_date" class="form-label">Birth Date</label>
                    <input type="date" name="birth_date" id="birth_date" class="form-control form-control-lg" value="{{ old('birth_date', $student->birth_date) }}" required>
                </div>

                <!-- School Origin Field -->
                <div class="mb-4">
                    <label for="school_origin" class="form-label">School Origin</label>
                    <input type="text" name="school_origin" id="school_origin" class="form-control form-control-lg" value="{{ old('school_origin', $student->school_origin) }}" required>
                </div>

                <!-- Status Field -->
                <div class="mb-4">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select form-select-lg" required>
                        <option value="Active" {{ $student->status == 'Active' ? 'selected' : '' }}>Active</option>
                        <option value="Inactive" {{ $student->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-primary btn-lg">Update Student</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
