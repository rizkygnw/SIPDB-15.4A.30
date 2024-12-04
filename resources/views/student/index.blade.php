@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Students List</h1>
    <a href="{{ route('student.create') }}" class="btn btn-primary mb-3">Add New Student</a>

    <table class="table table-bordered">
        <thead>
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
                <td>{{ $student->name }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->birth_date }}</td>
                <td>{{ $student->school_origin }}</td>
                <td>{{ $student->status }}</td>
                <td>
                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
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
@endsection
