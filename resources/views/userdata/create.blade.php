@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-gradient text-white">
            <h2>Add User</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('userdata.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Name Field -->
                <div class="mb-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control form-control-lg" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" value="{{ old('password') }}" required>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Role Field -->
                <div class="mb-4">
                    <label for="role" class="form-label">Role</label>
                    <select id="role" name="role" class="form-select form-select-lg" required>
                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="student" {{ old('role') == 'student' ? 'selected' : '' }}>Student</option>
                    </select>
                    @error('role')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Photo Upload Field -->
                <div class="mb-4">
                    <label for="photo" class="form-label">Profile Photo</label>
                    <input class="form-control form-control-lg" type="file" id="photo" name="photo" accept="image/*" required>
                    @error('photo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-primary btn-lg">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
