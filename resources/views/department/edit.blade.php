@extends('layout')

@section('content')
<div class="container">
    <h1>Edit Department</h1>
    <form action="{{ route('departments.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Department Name:</label>
        <input type="text" name="name" id="name" value="{{ $department->name }}" required>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

