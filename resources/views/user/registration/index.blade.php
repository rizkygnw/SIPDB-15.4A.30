<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-700 rounded-xl shadow-lg">
            <h2 class="font-semibold text-3xl text-white leading-tight py-2 px-4">
                {{ __('Status Siswa') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-8 bg-gradient-to-br from-slate-50 via-emerald-50 to-teal-50 min-h-screen">
        <div class="container mx-auto px-4">
            <!-- Enhanced Title -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-700 mb-3">
                    Detail Siswa
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-emerald-500 to-teal-600 mx-auto rounded-full mb-3"></div>
                <p class="text-slate-600 text-base max-w-lg mx-auto">Informasi lengkap data siswa yang telah mendaftar</p>
            </div>

            <!-- Check if there are students -->
            @if ($students->isEmpty())
                <div class="flex justify-center">
                    <div class="bg-white border border-slate-200 rounded-xl shadow-lg p-10 text-center max-w-md">
                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-2">Belum Ada Data</h3>
                        <p class="text-slate-500">Belum ada siswa yang mendaftar.</p>
                    </div>
                </div>
            @else
                <!-- Enhanced Cards container -->
                <div class="space-y-6">
                    @foreach ($students as $student)
                        <!-- Enhanced Student Card -->
                        <div class="bg-white border border-slate-200 shadow-lg rounded-xl overflow-hidden hover:shadow-xl hover:shadow-emerald-500/10 transition-all duration-300">
                            <div class="flex flex-col lg:flex-row">
                                <!-- Card Header - Left Side -->
                                <div class="bg-gradient-to-br from-emerald-600 via-teal-600 to-cyan-700 p-6 relative overflow-hidden lg:w-72 flex-shrink-0">
                                    <div class="absolute top-0 right-0 w-24 h-24 bg-white/10 rounded-full -mr-12 -mt-12"></div>
                                    <div class="absolute bottom-0 left-0 w-20 h-20 bg-white/5 rounded-full -ml-10 -mb-10"></div>
                                    <div class="relative z-10 h-full flex flex-col justify-center">
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                </svg>
                                            </div>
                                            <span class="px-3 py-1 rounded-full text-xs font-semibold {{ $student->status == 'Diterima' ? 'bg-green-100 text-green-800' : 'bg-orange-100 text-orange-800' }}">
                                                {{ ucfirst($student->status) }}
                                            </span>
                                        </div>
                                        <h3 class="text-2xl font-bold text-white mb-2 leading-tight">
                                            {{ $student->name }}
                                        </h3>
                                        <div class="w-12 h-0.5 bg-white/40 rounded-full"></div>
                                    </div>
                                </div>

                                <!-- Card Body - Right Side -->
                                <div class="p-6 flex-1 bg-white">
                                    <!-- Details Grid -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                        <div class="flex items-start space-x-3 bg-emerald-50 p-4 rounded-lg border border-emerald-100">
                                            <div class="w-5 h-5 text-emerald-600 mt-0.5 flex-shrink-0">
                                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="min-w-0">
                                                <span class="font-semibold text-slate-600 block text-sm mb-1">Alamat:</span>
                                                <span class="text-slate-800 text-sm">{{ $student->address }}</span>
                                            </div>
                                        </div>

                                        <div class="flex items-start space-x-3 bg-teal-50 p-4 rounded-lg border border-teal-100">
                                            <div class="w-5 h-5 text-teal-600 mt-0.5 flex-shrink-0">
                                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8a4 4 0 11-8 0V9a5 5 0 0110 0v6a4 4 0 11-8 0z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-slate-600 block text-sm mb-1">Tanggal Lahir:</span>
                                                <span class="text-slate-800 text-sm">{{ $student->birth_date }}</span>
                                            </div>
                                        </div>

                                        <div class="flex items-start space-x-3 bg-cyan-50 p-4 rounded-lg border border-cyan-100">
                                            <div class="w-5 h-5 text-cyan-600 mt-0.5 flex-shrink-0">
                                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-slate-600 block text-sm mb-1">Asal Sekolah:</span>
                                                <span class="text-slate-800 text-sm">{{ $student->school_origin }}</span>
                                            </div>
                                        </div>

                                        <div class="flex items-start space-x-3 bg-slate-50 p-4 rounded-lg border border-slate-200">
                                            <div class="w-5 h-5 text-slate-600 mt-0.5 flex-shrink-0">
                                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-slate-600 block text-sm mb-1">Status:</span>
                                                <span class="inline-block mt-1 px-3 py-1 rounded-full text-xs font-semibold {{ $student->status == 'Diterima' ? 'bg-green-100 text-green-800 border border-green-200' : 'bg-orange-100 text-orange-800 border border-orange-200' }}">
                                                    {{ ucfirst($student->status) }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="flex items-start space-x-3 bg-indigo-50 p-4 rounded-lg border border-indigo-100 md:col-span-2">
                                            <div class="w-5 h-5 text-indigo-600 mt-0.5 flex-shrink-0">
                                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-slate-600 block text-sm mb-1">Status Pembayaran:</span>
                                                <span class="inline-block mt-1 px-3 py-1 rounded-full text-xs font-semibold {{ $student->payment_status == 'Sudah Dibayar' ? 'bg-green-100 text-green-800 border border-green-200' : 'bg-orange-100 text-orange-800 border border-orange-200' }}">
                                                    {{ ucfirst($student->payment_status) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Documents Section -->
                                    <div class="pt-4 border-t border-slate-200">
                                        @if ($student->documents->isNotEmpty())
                                            <div class="flex items-center mb-4">
                                                <div class="w-5 h-5 text-emerald-600 mr-2">
                                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                    </svg>
                                                </div>
                                                <h4 class="text-lg font-semibold text-slate-800">Dokumen Terkait:</h4>
                                            </div>

                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                                @foreach ($student->documents as $document)
                                                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg border border-slate-200 hover:bg-slate-100 hover:border-slate-300 transition-all duration-200">
                                                        <div class="flex items-center space-x-3">
                                                            <div class="w-8 h-8 bg-emerald-500 rounded-lg flex items-center justify-center">
                                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                                </svg>
                                                            </div>
                                                            <span class="font-medium text-slate-700 text-sm">{{ $document->document_type }}</span>
                                                        </div>
                                                        <a href="{{ Storage::url($document->file_path) }}"
                                                           class="inline-flex items-center px-3 py-1.5 bg-gradient-to-r from-emerald-500 to-teal-500 text-white text-xs font-medium rounded-lg hover:from-emerald-400 hover:to-teal-400 transition-all duration-200 shadow-sm hover:shadow-md"
                                                           target="_blank">
                                                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                            </svg>
                                                            Lihat
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="text-center py-6">
                                                <div class="w-16 h-16 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                                    <svg class="w-8 h-8 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                    </svg>
                                                </div>
                                                <p class="text-slate-500">Tidak ada dokumen terkait.</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
