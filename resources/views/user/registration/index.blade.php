<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-900 leading-tight">
            {{ __('Student Registrations') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-blue-50 via-white to-blue-50">
        <div class="container mx-auto px-6">
            <!-- Title -->
            <h1 class="text-5xl font-extrabold mb-12 text-center text-gray-900">
                Siswa Terdaftar
            </h1>

            <!-- Check if there are students -->
            @if ($students->isEmpty())
                <div class="flex justify-center">
                    <p class="text-lg text-gray-700 bg-white rounded-lg shadow-lg p-8">
                        Belum ada siswa yang mendaftar.
                    </p>
                </div>
            @else
                <!-- Cards container -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                    @foreach ($students as $student)
                        <!-- Card -->
                        <div class="bg-white shadow-lg rounded-xl overflow-hidden transform hover:scale-105 hover:shadow-2xl transition-all duration-300">
                            <div class="p-6">
                                <!-- Title -->
                                <h3 class="text-2xl font-bold text-gray-800 mb-3">
                                    {{ $student->name }}
                                </h3>

                                <!-- Details -->
                                <div class="space-y-2 text-gray-600">
                                    <p>
                                        <span class="font-medium text-gray-800">Alamat:</span> {{ $student->address }}
                                    </p>
                                    <p>
                                        <span class="font-medium text-gray-800">Tanggal Lahir:</span> {{ $student->birth_date }}
                                    </p>
                                    <p>
                                        <span class="font-medium text-gray-800">Asal Sekolah:</span> {{ $student->school_origin }}
                                    </p>
                                    <p>
                                        <span class="font-medium text-gray-800">Status:</span>

                                        <span class="badge {{ $student->status == 'Diterima' ? 'bg-success' : 'bg-secondary' }} text-white">
                                            {{ ucfirst($student->status) }}
                                        </span>
                                    </p>
                                    <p>
                                        <span class="font-medium text-gray-800">Status Pembayaran:</span>
                                        <span class="badge {{ $student->payment_status == 'Sudah Dibayar' ? 'bg-success' : 'bg-secondary' }} text-white">
                                            {{ ucfirst($student->payment_status) }}
                                        </span>
                                    </p>
                                </div>

                                <!-- Documents Section -->
                                @if ($student->documents->isNotEmpty())
                                    <h4 class="text-lg font-semibold text-gray-700 mt-4">Dokumen Terkait:</h4>
                                    <ul class="list-disc pl-5 text-gray-600 mt-2 space-y-1">
                                        @foreach ($student->documents as $document)
                                            <li>
                                                <span class="font-medium text-gray-800">{{ $document->document_type }}:</span>
                                                <a href="{{ Storage::url($document->file_path) }}" class="text-blue-500 hover:text-blue-700 underline" target="_blank">Lihat File</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p class="text-gray-500 mt-4">Tidak ada dokumen terkait.</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
