<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ __('Departments') }}
        </h2>
    </x-slot>

    <div class="container my-8">
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('departments.create') }}" class="btn btn-success px-6 py-2 text-white font-semibold rounded-md shadow-md hover:bg-green-700 transition duration-300 ease-in-out">
                <i class="btn-primary mr-2"></i> Upload New Document
            </a>
        </div>

        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="table-auto w-full text-center border-collapse">
                <thead class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white">
                    <tr>
                        <th class="px-6 py-3 text-lg font-semibold">Department Name</th>
                        <th class="px-6 py-3 text-lg font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($departments as $department)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4 text-gray-700">{{ $department->name }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning text-white px-4 py-2 rounded-lg mr-2 hover:bg-yellow-600 transition duration-300 ease-in-out">
                                Edit
                            </a>
                            <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300 ease-in-out">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
