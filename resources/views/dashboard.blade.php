<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Welcome Section -->
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-semibold text-gray-800">Selamat datang, {{ Auth::user()->name }}!</h3>
                        <p class="text-lg text-gray-500 mt-2">Ini adalah dashboard Anda untuk melihat status dan informasi terkait pendaftaran.</p>
                    </div>

                    <!-- Quick Info Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Card 1: Pendaftaran -->
                        <div class="bg-blue-500 p-6 rounded-lg shadow-lg text-black">
                            <h4 class="text-xl font-semibold text-black">Pendaftaran</h4>
                            <p class="mt-4">Lihat status pendaftaran Anda. Proses sedang berlangsung.</p>
                        </div>

                        <!-- Card 2: Pengumuman -->
                        <div class="bg-green-500 p-6 rounded-lg shadow-lg text-black">
                            <h4 class="text-xl font-semibold text-black">Pengumuman</h4>
                            <p class="mt-4">Dapatkan pengumuman terbaru terkait penerimaan siswa baru.</p>
                        </div>

                        <!-- Card 3: Dokumen -->
                        <div class="bg-yellow-500 p-6 rounded-lg shadow-lg text-black">
                            <h4 class="text-xl font-semibold text-black">Dokumen</h4>
                            <p class="mt-4">Cek dokumen yang perlu Anda unggah untuk pendaftaran.</p>
                        </div>
                    </div>

                    <!-- Informasi Tambahan -->
                    <div class="mt-12 text-center">
                        <h4 class="text-xl font-semibold text-gray-800">Informasi Lainnya</h4>
                        <p class="mt-2 text-gray-600">Ikuti petunjuk lebih lanjut melalui menu yang tersedia di dashboard ini. Jika Anda memiliki pertanyaan, hubungi kami langsung di halaman kontak.</p>
                    </div>

                    <!-- Contact Us -->
                    <div class="mt-12 text-center">
                        <a href="{{ url('user/registrations/create') }}" class="bg-blue-500 text-white py-2 px-6 rounded-full hover:bg-blue-600 transition duration-300">Lanjut Pendaftaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
