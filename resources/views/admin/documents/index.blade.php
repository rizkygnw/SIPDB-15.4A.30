<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <h1>Documents</h1>
            <a href="{{ route('documents.create') }}" class="btn btn-primary">Upload New Document</a>

            <table class="table mt-4">
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Document Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($documents as $document)
                        <tr>
                            <td>{{ $document->student->name }}</td>
                            <td>{{ $document->document_type }}</td>
                            <td>
                                <a href="{{ route('documents.edit', $document->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('documents.destroy', $document->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <!-- Lihat Document Button -->
                                <a href="{{ Storage::url($document->file_path) }}" target="_blank" class="btn btn-info">View</a>

                                <!-- Download Document Button -->
                                <a href="{{ Storage::url($document->file_path) }}" download class="btn btn-success">Download</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
