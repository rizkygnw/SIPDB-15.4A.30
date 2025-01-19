<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Student Registrations') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-semibold mb-6 text-center text-gray-800">Siswa Terdaftar</h1>

            <!-- Check if there are students -->
            @if ($students->isEmpty())
                <p class="text-center text-gray-600">Siswa belum mendaftar.</p>
            @else
                <!-- Display list of students as cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($students as $student)
                        <div class="card bg-white shadow-lg rounded-lg overflow-hidden">
                            <div class="card-body p-6">
                                <h5 class="card-title text-xl font-semibold text-gray-800 mb-4">{{ $student->name }}</h5>
                                <p class="card-text text-gray-700">
                                    <strong>Address:</strong> {{ $student->address }}<br>
                                    <strong>Birth Date:</strong> {{ $student->birth_date }}<br>
                                    <strong>School Origin:</strong> {{ $student->school_origin }}<br>
                                    <strong>Status:</strong> {{ $student->status }}
                                </p>

                                <!-- Display Documents -->
                                @if ($student->documents->isNotEmpty())
                                    <h6 class="text-lg font-medium text-gray-800 mt-4">Dokumen Terkait:</h6>
                                    <ul class="list-disc pl-5 text-gray-700">
                                        @foreach ($student->documents as $document)
                                            <li>
                                                <strong>{{ $document->document_type }}:</strong>
                                                <a href="{{ Storage::url($document->file_path) }}" class="text-blue-500 hover:text-blue-700" target="_blank">View File</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p class="text-gray-600 mt-2">Tidak ada Document.</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
