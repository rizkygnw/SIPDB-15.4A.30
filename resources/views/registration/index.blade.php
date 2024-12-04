@extends('layouts.app')

@section('content')
    <h1>Registrations</h1>
    <a href="{{ route('registrations.create') }}" class="btn btn-primary">Create Registration</a>

    <table class="table">
        <thead>
            <tr>
                <th>Student</th>
                <th>Registration Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registrations as $registration)
                <tr>
                    <td>{{ $registration->student->name }}</td>
                    <td>{{ $registration->registration_date }}</td>
                    <td>{{ $registration->status }}</td>
                    <td>
                        <a href="{{ route('registrations.edit', $registration->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('registrations.destroy', $registration->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
