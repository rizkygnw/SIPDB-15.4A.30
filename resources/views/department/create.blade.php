@extends('layout')

@section('content')
    <div class="container">
        <h1>Create Department</h1>
        <form action="{{ route('departments.store') }}" method="POST">
            @csrf
            <label for="name">Department Name:</label>
            <input type="text" name="name" id="name" required>
            <button type="submit">Create</button>
        </form>
    </div>
@endsection
