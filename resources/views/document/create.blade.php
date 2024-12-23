@extends('layout')

@section('content')
    <div class="container">
        <h1>Upload Document</h1>

        <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="student_id" class="form-label">Student</label>
                <select name="student_id" class="form-control" required>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="document_type" class="form-label">Document Type</label>
                <input type="text" name="document_type" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="file" class="form-label">File</label>
                <input type="file" name="file" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
@endsection
