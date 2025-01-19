<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Departments') }}
        </h2>
    </x-slot>

    <div class="table-responsive">
        <div class="container">
            <br>
            <a href="{{ route('departments.create') }}" class="btn btn-primary">Upload New Document</a>
            <br>
            <br>
            <table class="table table-hover table-bordered text-center align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($departments as $department)
                    <tr>
                        <td>{{ $department->name }}</td>
                        <td>
                            <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
