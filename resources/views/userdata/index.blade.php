@extends('layout')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <!-- Card Header -->
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">User Data</h3>
            <a href="{{ route('userdata.create') }}" class="btn btn-light btn-sm">
                <i class="bi bi-person-plus me-1"></i> Add User
            </a>
        </div>

        <!-- Card Body -->
        <div class="card-body">
            <!-- Responsive Table -->
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-center align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <!-- Photo -->
                            <td>
                                <img src="{{ $user->photo ? url('userdata/foto/'.$user->id) . '?' . time() : asset('default-photo.png') }}"
                                     alt="{{ $user->name }}"
                                     class="rounded-circle shadow-sm"
                                     style="object-fit: cover; width: 50px; height: 50px;">
                            </td>

                            <!-- Name -->
                            <td class="fw-semibold">{{ $user->name }}</td>

                            <!-- Email -->
                            <td>{{ $user->email }}</td>

                            <!-- Role -->
                            <td>
                                <span class="badge bg-success text-white">{{ ucfirst($user->role) }}</span>
                            </td>

                            <!-- Actions -->
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('userdata.edit', $user->id) }}" class="btn btn-warning btn-sm me-1">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <!-- Delete Button -->
                                <form action="{{ route('userdata.destroy', $user->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
