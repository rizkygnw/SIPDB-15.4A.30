<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Department</title>
</head>
<body>
    <h1>Edit Department</h1>
    <form action="{{ route('departments.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Department Name:</label>
        <input type="text" name="name" id="name" value="{{ $department->name }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
