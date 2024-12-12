@extends('layout')

@section('content')
<div class="container">
    <h1>Logs</h1>
    <a href="{{ route('logs.create') }}" class="btn btn-primary mb-3">Create Log</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Activity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
            <tr>
                <td>{{ $log->id }}</td>
                <td>{{ $log->user->name }}</td>
                <td>{{ $log->activity }}</td>
                <td>
                    <a href="{{ route('logs.edit', $log) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('logs.destroy', $log) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $logs->links() }}
</div>
@endsection
