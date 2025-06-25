<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documents') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Student Documents</h3>
                <a href="{{ route('students.index') }}" class="btn btn-light btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Back to Students
                </a>
            </div>

            <div class="card-body">
                <!-- Search Form -->
                <form method="GET" action="{{ route('students.index') }}" class="mb-3">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search by name..." value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-hover table-bordered text-center align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>Student</th>
                                <th>Photo</th>
                                <th>Ijazah</th>
                                <th>Akte</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($documents as $studentDocuments)
                                @php
                                    $student = $studentDocuments->first()->student;
                                    $photo = $studentDocuments->where('document_type', 'Photo')->first();
                                    $ijazah = $studentDocuments->where('document_type', 'Ijazah')->first();
                                    $akte = $studentDocuments->where('document_type', 'Akte')->first();
                                @endphp
                                <tr>
                                    <td class="fw-semibold">{{ $student->name }}</td>

                                    {{-- Photo --}}
                                    <td>
                                        @if($photo)
                                            <a href="{{ Storage::url($photo->file_path) }}" target="_blank" class="btn btn-info btn-sm mb-1">
                                                <i class="bi bi-eye"></i> View
                                            </a>
                                            <a href="{{ Storage::url($photo->file_path) }}" download class="btn btn-success btn-sm">
                                                <i class="bi bi-download"></i> Download
                                            </a>
                                        @else
                                            <span class="text-muted">No Photo</span>
                                        @endif
                                    </td>

                                    {{-- Ijazah --}}
                                    <td>
                                        @if($ijazah)
                                            <a href="{{ Storage::url($ijazah->file_path) }}" target="_blank" class="btn btn-info btn-sm mb-1">
                                                <i class="bi bi-eye"></i> View
                                            </a>
                                            <a href="{{ Storage::url($ijazah->file_path) }}" download class="btn btn-success btn-sm">
                                                <i class="bi bi-download"></i> Download
                                            </a>
                                        @else
                                            <span class="text-muted">No Ijazah</span>
                                        @endif
                                    </td>

                                    {{-- Akte --}}
                                    <td>
                                        @if($akte)
                                            <a href="{{ Storage::url($akte->file_path) }}" target="_blank" class="btn btn-info btn-sm mb-1">
                                                <i class="bi bi-eye"></i> View
                                            </a>
                                            <a href="{{ Storage::url($akte->file_path) }}" download class="btn btn-success btn-sm">
                                                <i class="bi bi-download"></i> Download
                                            </a>
                                        @else
                                            <span class="text-muted">No Akte</span>
                                        @endif
                                    </td>

                                    {{-- Actions --}}
                                    <td>
                                        <a href="{{ route('documents.edit', $studentDocuments->first()->id) }}" class="btn btn-warning btn-sm me-1">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <form action="{{ route('documents.destroy', $studentDocuments->first()->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">No Documents Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
