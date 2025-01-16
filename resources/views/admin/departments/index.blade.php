<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <h1>Departments</h1>
            <a href="{{ route('departments.create') }}" class="btn btn-primary">Upload New Document</a>

            <table class="table mt-4">
                <thead>
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
