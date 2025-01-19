<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Students List</h3>
                <a href="{{ route('students.create') }}" class="btn btn-light btn-sm">
                    <i class="bi bi-person-plus me-1"></i> Add New Student
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
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Birth Date</th>
                                <th>School Origin</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="fw-semibold">{{ $student->name }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->birth_date }}</td>
                                <td>{{ $student->school_origin }}</td>
                                <td>
                                    <span class="badge {{ $student->status == 'Diterima' ? 'bg-success' : 'bg-secondary' }} text-white">
                                        {{ ucfirst($student->status) }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm me-1">
                                        <i class="bi bi-pencil-square">Edit</i>
                                    </a>

                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                            <i class="bi bi-trash">Hapus</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">No Students Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
