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
                            <a href="{{ route('siswa.export') }}" class="btn btn-success mb-3">
                                Download Data Siswa (.xlsx)
                            </a>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Birth Date</th>
                                <th>School Origin</th>
                                <th>Departments</th>
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
                                        @foreach($student->departments as $department)
                                            <span class="badge bg-info text-dark">{{ $department->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        <span class="badge {{ $student->status == 'Diterima' ? 'bg-success' : 'bg-secondary' }} text-white">
                                            {{ ucfirst($student->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{ route('students.edit', $student->id) }}"
                                            class="btn btn-sm btn-warning d-flex align-items-center justify-content-center"
                                            title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus siswa ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="btn btn-sm btn-danger d-flex align-items-center justify-content-center"
                                                        title="Hapus">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
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
