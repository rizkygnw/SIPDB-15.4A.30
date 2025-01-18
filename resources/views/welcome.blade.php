<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penerimaan Siswa Baru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-gradient-to-r from-blue-500 to-blue-800 shadow-lg">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-3xl font-extrabold text-white">Sistem Informasi Penerimaan Siswa Baru</h1>
            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-white bg-black/20 ring-1 ring-transparent transition hover:bg-white/30 hover:text-black focus:outline-none focus-visible:ring-white"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-white bg-black/20 ring-1 ring-transparent transition hover:bg-white/30 hover:text-black focus:outline-none focus-visible:ring-white"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>
    <main class="container mx-auto px-6 py-8">
        <section class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Selamat Datang di Sistem Penerimaan Siswa Baru</h2>
            <p class="text-gray-700 mb-6">Sistem ini membantu Anda mendaftar ke sekolah dengan mudah dan cepat. Jelajahi fitur kami untuk kemudahan pendaftaran.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-medium mb-2 text-gray-800">Persyaratan Pendaftaran</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>Scan ijazah terakhir</li>
                        <li>Scan kartu keluarga</li>
                        <li>Pas foto digital (format JPG/PNG)</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-medium mb-2 text-gray-800">Jadwal Pendaftaran</h3>
                    <p class="text-gray-700">Pendaftaran dibuka mulai <span class="font-bold text-blue-600">1 Januari</span> hingga <span class="font-bold text-blue-600">1 Februari 2025!</span> <br> Jangan lewatkan kesempatan ini!</p>
                </div>
            </div>

            <div class="mt-6 flex justify-center">
                <a href="{{ route('register') }}" class="bg-gradient-to-r from-blue-500 to-blue-800 text-white px-6 py-3 rounded-lg shadow-md hover:from-teal-400 hover:to-blue-500 transition transform hover:scale-105">Daftar Sekarang</a>
            </div>
        </section>
    </main>
    <footer class="bg-gradient-to-r from-gray-200 to-gray-300 py-6 mt-8">
        <div class="container mx-auto text-center text-gray-700">
            <p class="text-sm">&copy; 2025 Sistem Penerimaan Siswa Baru. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
