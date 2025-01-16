<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <!-- Card Header -->
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Add New Student</h3>
            </div>

            <!-- Card Body -->
            <div class="card-body">
                <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- User ID Field -->
                    <div class="mb-4">
                        <label for="user_id" class="form-label">User ID</label>
                        <input type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}">
                        @error('user_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Name Field -->
                    <div class="mb-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Address Field -->
                    <div class="mb-4">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control @error('address') is-invalid @enderror" name="address">{{ old('address') }}</textarea>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Birth Date Field -->
                    <div class="mb-4">
                        <label for="birth_date" class="form-label">Birth Date</label>
                        <input type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}">
                        @error('birth_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- School Origin Field -->
                    <div class="mb-4">
                        <label for="school_origin" class="form-label">School Origin</label>
                        <input type="text" class="form-control @error('school_origin') is-invalid @enderror" name="school_origin" value="{{ old('school_origin') }}">
                        @error('school_origin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Department Field -->
                    <div class="mb-4">
                        <label for="departments" class="form-label">Departments</label>
                        <select name="departments[]" class="form-control @error('departments') is-invalid @enderror" multiple>
                            <option value="Science" {{ in_array('Science', old('departments', [])) ? 'selected' : '' }}>Science</option>
                            <option value="Mathematics" {{ in_array('Mathematics', old('departments', [])) ? 'selected' : '' }}>Mathematics</option>
                            <option value="Literature" {{ in_array('Literature', old('departments', [])) ? 'selected' : '' }}>Literature</option>
                            <!-- Add more departments as needed -->
                        </select>
                        @error('departments')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Document Upload Section -->
                    <div class="mb-4">
                        <label for="document_type" class="form-label">Document Type</label>
                        <input type="text" class="form-control @error('document_type') is-invalid @enderror" name="document_type" value="{{ old('document_type') }}">
                        @error('document_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="file" class="form-label">Upload Document</label>
                        <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}">
                        @error('file')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit and Cancel Buttons -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-lg">Save</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary btn-lg">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
