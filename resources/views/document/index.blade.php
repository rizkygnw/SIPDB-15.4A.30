@extends('layout')

@section('content')
    <div class="container">
        <h1>Documents</h1>
        <a href="{{ route('documents.create') }}" class="btn btn-primary">Upload New Document</a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Student</th>
                    <th>Document Type</th>
                    <th>File Path</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($documents as $document)
                    <tr>
                        <td>{{ $document->student->name }}</td>
                        <td>{{ $document->document_type }}</td>
                        <td>{{ $document->file_path }}</td>
                        <td>
                            <a href="{{ route('documents.edit', $document->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('documents.destroy', $document->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
