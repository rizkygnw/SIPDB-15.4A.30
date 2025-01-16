<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Registrations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <h1 class="mb-4">Registered Students</h1>

            <!-- Check if there are students -->
            @if ($students->isEmpty())
                <p>No students registered yet.</p>
            @else
                <!-- Display list of students as cards -->
                <div class="row">
                    @foreach ($students as $student)
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $student->name }}</h5>
                                    <p class="card-text">
                                        <strong>Address:</strong> {{ $student->address }}<br>
                                        <strong>Birth Date:</strong> {{ $student->birth_date }}<br>
                                        <strong>School Origin:</strong> {{ $student->school_origin }}<br>
                                        <strong>Status:</strong> {{ $student->status }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
