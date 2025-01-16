<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <h1>Create Department</h1>
            <form action="{{ route('departments.store') }}" method="POST">
                @csrf
                <label for="name">Department Name:</label>
                <input type="text" name="name" id="name" required>
                <button type="submit">Create</button>
            </form>
        </div>
    </div>
</x-app-layout>
