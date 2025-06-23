<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penerimaan Siswa Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite alternate;
        }
        @keyframes pulse-glow {
            from {
                box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
            }
            to {
                box-shadow: 0 0 30px rgba(59, 130, 246, 0.8);
            }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-indigo-100 text-gray-900 min-h-screen">
    <header class="gradient-bg shadow-2xl sticky top-0 z-40">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <div class="bg-white/20 backdrop-blur-sm p-2 rounded-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-2xl md:text-3xl font-extrabold text-white">SIPSIS</h1>
                    <p class="text-blue-200 text-xs md:text-sm hidden md:block">Sistem Informasi Penerimaan Siswa Baru</p>
                </div>
            </div>

            @if (Route::has('login'))
                <nav class="flex items-center space-x-3">
                    @auth
                        <div class="flex items-center space-x-4">
                            <span class="text-white text-sm hidden md:inline">Selamat datang, {{ Auth::user()->name }}!</span>
                            <a href="{{ route('dashboard') }}" class="bg-white/20 backdrop-blur-sm text-white px-4 py-2 rounded-lg border border-white/30 hover:bg-white/30 hover:text-gray-800 transition duration-300 transform hover:scale-105 text-sm">
                                Dashboard
                            </a>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="bg-red-500/80 backdrop-blur-sm text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300 transform hover:scale-105 text-sm">
                                    Keluar
                                </button>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="bg-white/20 backdrop-blur-sm text-white px-4 py-2 rounded-lg border border-white/30 hover:bg-white/30 hover:text-gray-800 transition duration-300 transform hover:scale-105 text-sm">
                            Masuk
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-white text-blue-600 px-4 py-2 rounded-lg hover:bg-blue-50 transition duration-300 transform hover:scale-105 font-semibold text-sm">
                                Daftar
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    <main class="container mx-auto px-6 py-8">
        <!-- Hero Section -->
        <section class="text-center mb-12">
            <div class="bg-white/80 backdrop-blur-sm p-8 md:p-12 rounded-2xl shadow-2xl card-hover">
                <div class="mb-8">
                    <div class="w-20 h-20 md:w-24 md:h-24 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full mx-auto flex items-center justify-center mb-6 pulse-glow">
                        <svg class="w-10 h-10 md:w-12 md:h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </div>
                </div>
                <h2 class="text-2xl md:text-4xl font-bold mb-6 text-gray-800 leading-tight">
                    Selamat Datang di <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">SIPSIS</span>
                </h2>
                <p class="text-gray-600 mb-8 text-lg md:text-xl leading-relaxed max-w-3xl mx-auto">
                    Sistem Informasi Penerimaan Siswa Baru yang modern dan terpercaya.
                    Daftar sekolah impian Anda dengan mudah, cepat, dan aman melalui platform digital terdepan.
                </p>

                @guest
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="{{ route('register') }}" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-xl shadow-lg hover:from-blue-700 hover:to-purple-700 transition transform hover:scale-105 font-semibold text-lg inline-flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <span>Daftar Sekarang</span>
                        </a>
                        <a href="{{ route('login') }}" class="border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-xl hover:border-blue-500 hover:text-blue-600 transition transform hover:scale-105 font-semibold text-lg inline-flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            <span>Sudah Punya Akun?</span>
                        </a>
                    </div>
                @else
                    <div class="bg-green-50 border border-green-200 rounded-xl p-6 max-w-md mx-auto">
                        <div class="flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-green-800 mb-2">Selamat, {{ Auth::user()->name }}!</h3>
                        <p class="text-green-700 mb-4">Anda sudah berhasil masuk ke sistem.</p>
                        <a href="{{ route('dashboard') }}" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition font-semibold inline-flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <span>Ke Dashboard</span>
                        </a>
                    </div>
                @endguest
            </div>
        </section>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-12">
            <!-- Persyaratan -->
            <div class="bg-white/80 backdrop-blur-sm p-6 rounded-xl shadow-lg card-hover border border-white/20">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-green-600 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Persyaratan</h3>
                </div>
                <ul class="space-y-4 text-gray-600">
                    <li class="flex items-start">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                        <span>Scan ijazah terakhir (PDF/JPG max 2MB)</span>
                    </li>
                    {{-- <li class="flex items-start">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                        <span>Scan kartu keluarga (PDF/JPG max 2MB)</span>
                    </li> --}}
                    <li class="flex items-start">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                        <span>Pas foto digital 3x4 (JPG/PNG max 1MB)</span>
                    </li>
                    {{-- <li class="flex items-start">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                        <span>Surat keterangan sehat dari dokter</span>
                    </li> --}}
                    <li class="flex items-start">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                        <span>Akta kelahiran</span>
                    </li>
                </ul>
            </div>

            <!-- Jadwal -->
            <div class="bg-white/80 backdrop-blur-sm p-6 rounded-xl shadow-lg card-hover border border-white/20">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Jadwal Penting</h3>
                </div>
                <div class="space-y-4">
                    <div class="bg-gradient-to-r from-blue-50 to-blue-100 p-4 rounded-lg border border-blue-200">
                        <p class="text-sm text-gray-600 mb-1">📅 Pendaftaran</p>
                        <p class="font-bold text-blue-600 text-lg">1 Januari - 1 Februari 2025</p>
                    </div>
                    <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 p-4 rounded-lg border border-yellow-200">
                        <p class="text-sm text-gray-600 mb-1">📋 Seleksi</p>
                        <p class="font-bold text-yellow-600">5 - 10 Februari 2025</p>
                    </div>
                    <div class="bg-gradient-to-r from-green-50 to-green-100 p-4 rounded-lg border border-green-200">
                        <p class="text-sm text-gray-600 mb-1">🎉 Pengumuman</p>
                        <p class="font-bold text-green-600">15 Februari 2025</p>
                    </div>
                </div>
            </div>

            <!-- Proses -->
            <div class="bg-white/80 backdrop-blur-sm p-6 rounded-xl shadow-lg card-hover border border-white/20 md:col-span-2 lg:col-span-1">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-purple-600 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Langkah Mudah</h3>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                        <span class="w-8 h-8 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-4">1</span>
                        <span class="text-gray-700 font-medium">Buat akun baru</span>
                    </div>
                    <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                        <span class="w-8 h-8 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-4">2</span>
                        <span class="text-gray-700 font-medium">Lengkapi biodata</span>
                    </div>
                    <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                        <span class="w-8 h-8 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-4">3</span>
                        <span class="text-gray-700 font-medium">Upload dokumen</span>
                    </div>
                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                        <span class="w-8 h-8 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-4">✓</span>
                        <span class="text-green-700 font-medium">Submit & selesai!</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Status Alert -->
        <div class="bg-gradient-to-r from-green-50 to-emerald-50 border-l-4 border-green-500 p-6 rounded-xl shadow-lg mb-8">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <h4 class="text-lg font-semibold text-green-800 mb-1">🎊 Pendaftaran Sedang Dibuka!</h4>
                    <p class="text-green-700">
                        Jangan lewatkan kesempatan emas ini untuk bergabung dengan sekolah terbaik.
                        <span class="font-semibold">Kuota terbatas!</span> Daftar sekarang sebelum terlambat.
                    </p>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <section class="bg-white/80 backdrop-blur-sm p-8 rounded-xl shadow-lg mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Pertanyaan Sering Diajukan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-gray-50 rounded-lg">
                    <h4 class="font-semibold text-gray-800 mb-2">Kapan batas akhir pendaftaran?</h4>
                    <p class="text-gray-600 text-sm">Pendaftaran ditutup pada 1 Februari 2025 pukul 23:59 WIB.</p>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg">
                    <h4 class="font-semibold text-gray-800 mb-2">Apakah ada biaya pendaftaran?</h4>
                    <p class="text-gray-600 text-sm">Pendaftaran online melalui sistem ini gratis 100%.</p>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg">
                    <h4 class="font-semibold text-gray-800 mb-2">Bagaimana cara mengecek hasil seleksi?</h4>
                    <p class="text-gray-600 text-sm">Login ke akun Anda dan cek status di dashboard pada 15 Februari 2025.</p>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg">
                    <h4 class="font-semibold text-gray-800 mb-2">Dokumen apa saja yang wajib diunggah?</h4>
                    <p class="text-gray-600 text-sm">Ijazah terakhir, kartu keluarga, pas foto, dan surat keterangan sehat.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-800 to-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <i class="fas fa-graduation-cap text-2xl text-blue-400"></i>
                        <h3 class="text-xl font-bold">PPDB Online</h3>
                    </div>
                    <p class="text-gray-300 leading-relaxed">
                        Sistem penerimaan siswa baru terdepan dengan teknologi modern
                        untuk kemudahan dan kenyamanan proses pendaftaran.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Kontak</h4>
                    <div class="space-y-3 text-gray-300">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone"></i>
                            <span>(021) 1234-5678</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope"></i>
                            <span>info@ppdb-online.id</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Jakarta, Indonesia</span>
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Media Sosial</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 p-3 rounded-full transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-sky-500 hover:bg-sky-600 p-3 rounded-full transition-colors duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="bg-pink-600 hover:bg-pink-700 p-3 rounded-full transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="bg-red-600 hover:bg-red-700 p-3 rounded-full transition-colors duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400">
                    &copy; 2025 Sistem Penerimaan Siswa Baru. All rights reserved.
                    Made with <i class="fas fa-heart text-red-500"></i> for education.
                </p>
            </div>
        </div>
    </footer>

    <!-- Scroll to top button -->
    <button id="scrollTop" class="fixed bottom-8 right-8 bg-blue-600 hover:bg-blue-700 text-white p-4 rounded-full shadow-2xl transition-all duration-300 opacity-0 invisible">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Scroll to top functionality
        const scrollTopBtn = document.getElementById('scrollTop');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.remove('opacity-0', 'invisible');
            } else {
                scrollTopBtn.classList.add('opacity-0', 'invisible');
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Add smooth scrolling for all internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
