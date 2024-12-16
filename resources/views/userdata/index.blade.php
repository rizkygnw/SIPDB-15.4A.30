@extends('layout')

@section('content')
<div class="container">
    <h1>User Data</h1>
    <a href="{{ route('userdata.create') }}" class="btn btn-primary mb-3">Add User</a>
    <table class="table table-bordered table-striped text-center">
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
                <td>
                    <img
                        src="{{ $user->photo ? url('userdata/foto/'.$user->id) . '?' . time() : asset('default-photo.png') }}"
                        alt="{{ $user->name }}"
                        class="rounded-circle"
                        style="object-fit: cover; width: 60px; height: 60px;"
                    >
                </td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ ucfirst($user->role) }}</td>
                <td>
                    <a href="{{ route('userdata.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('userdata.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
