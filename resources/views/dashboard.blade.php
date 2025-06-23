<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-700 rounded-xl shadow-lg">
            <h2 class="font-semibold text-3xl text-white leading-tight py-2 px-4">
                {{ __('Dashboard Siswa') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-10 bg-gradient-to-br from-slate-50 via-emerald-50 to-teal-50 min-h-screen">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border border-slate-200 rounded-2xl shadow-xl p-8">

                <!-- Welcome Section -->
                <div class="text-center mb-10">
                    <h3 class="text-3xl font-extrabold text-slate-800">Selamat Datang, {{ Auth::user()->name }}!</h3>
                    <p class="text-slate-600 mt-2 max-w-xl mx-auto text-base">Ini adalah dashboard utama Anda untuk mengelola informasi pendaftaran dan dokumen.</p>
                </div>

                <!-- Info Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Pendaftaran -->
                    <div class="bg-gradient-to-br from-blue-500 to-indigo-500 text-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-xl font-bold">Pendaftaran</h4>
                            <svg class="w-6 h-6 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4M12 14a4 4 0 11-8 0V9a5 5 0 0110 0v5a4 4 0 11-8 0z" />
                            </svg>
                        </div>
                        <p class="text-sm">Lihat status pendaftaran Anda. Proses sedang berlangsung.</p>
                    </div>

                    <!-- Pengumuman -->
                    <div class="bg-gradient-to-br from-green-500 to-emerald-500 text-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-xl font-bold">Pengumuman</h4>
                            <svg class="w-6 h-6 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m0-4h.01M21 12c0-4.418-3.582-8-8-8S5 7.582 5 12c0 3.866 2.743 7.063 6.25 7.75V21h1.5v-1.25C18.257 19.063 21 15.866 21 12z"/>
                            </svg>
                        </div>
                        <p class="text-sm">Dapatkan info terbaru penerimaan siswa baru.</p>
                    </div>

                    <!-- Dokumen -->
                    <div class="bg-gradient-to-br from-yellow-500 to-orange-500 text-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-xl font-bold">Dokumen</h4>
                            <svg class="w-6 h-6 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <p class="text-sm">Cek dan unggah dokumen Anda untuk pendaftaran.</p>
                    </div>
                </div>

                <!-- Informasi Tambahan -->
                <div class="mt-12 text-center">
                    <h4 class="text-2xl font-bold text-slate-800 mb-2">Informasi Lainnya</h4>
                    <p class="text-slate-600 max-w-2xl mx-auto text-sm">Ikuti petunjuk lebih lanjut melalui menu yang tersedia. Bila memiliki pertanyaan, silakan hubungi kami melalui halaman kontak.</p>
                </div>

                <!-- Button CTA -->
                <div class="mt-10 text-center">
                    <a href="{{ url('user/registrations/create') }}"
                       class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-500 to-teal-500 text-white text-sm font-semibold px-6 py-3 rounded-full shadow-md hover:from-emerald-400 hover:to-teal-400 transition-all duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Lanjut Pendaftaran
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
