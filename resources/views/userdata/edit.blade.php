@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-gradient text-white">
            <h2>Edit User</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('userdata.update', $userData->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name and Email Fields -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control form-control-lg" value="{{ old('name', $userData->name) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control form-control-lg" value="{{ old('email', $userData->email) }}" required>
                    </div>
                </div>

                <!-- Password and Role Fields -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control form-control-lg">
                        <small class="text-muted">Leave blank to keep current password</small>
                    </div>
                    <div class="col-md-6">
                        <label for="role" class="form-label">Role</label>
                        <select id="role" name="role" class="form-select form-select-lg" required>
                            <option value="admin" {{ $userData->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="student" {{ $userData->role == 'student' ? 'selected' : '' }}>Student</option>
                        </select>
                    </div>
                </div>

                <!-- Profile Picture Upload -->
                <div class="mb-4">
                    <label for="photo" class="form-label">Profile Photo</label>
                    <input class="form-control form-control-lg" type="file" id="photo" name="photo" accept="image/*">
                    <small class="text-muted">Leave blank to keep the current photo</small>
                </div>

                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-primary btn-lg">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
