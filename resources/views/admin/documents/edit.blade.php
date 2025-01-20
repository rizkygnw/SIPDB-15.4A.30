<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Document') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <h1>Edit Document</h1>

            <form action="{{ route('documents.update', $document->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="student_id" class="form-label">Student</label>
                    <select name="student_id" class="form-control" required>
                        @foreach($students as $student)
                            <option value="{{ $student->id }}" {{ $student->id == $document->student_id ? 'selected' : '' }}>{{ $student->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="document_type" class="form-label">Document Type</label>
                    <input type="text" name="document_type" class="form-control" value="{{ $document->document_type }}" required>
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">File</label>
                    <input type="file" name="file" class="form-control">
                    <small>Leave blank to keep current file</small>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</x-app-layout>
