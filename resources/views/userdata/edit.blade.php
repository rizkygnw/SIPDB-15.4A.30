@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('userdata.update', $userData->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $userData->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $userData->email) }}" required>
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control">
            <small>Leave blank to keep current password</small>
        </div>
        <div class="mb-3">
            <label for="role">Role</label>
            <select id="role" name="role" class="form-control" required>
                <option value="admin" {{ $userData->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="student" {{ $userData->role == 'student' ? 'selected' : '' }}>Student</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
