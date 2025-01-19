<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">Total Pendaftar</h3>
                    <p class="text-3xl font-bold mt-2">{{ $totalPendaftar }}</p>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">Diterima</h3>
                    <p class="text-3xl font-bold mt-2">{{ $diterima }}</p>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">Ditolak</h3>
                    <p class="text-3xl font-bold mt-2">{{ $ditolak }}</p>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">Pendaftaran</h3>
                    <p class="text-3xl font-bold mt-2">{{ $pending }}</p>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">Seleksi</h3>
                    <p class="text-3xl font-bold mt-2">{{ $seleksi }}</p>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">Tes Minat Bakat</h3>
                    <p class="text-3xl font-bold mt-2">{{ $tes }}</p>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">Registrasi Ulang</h3>
                    <p class="text-3xl font-bold mt-2">{{ $registrasi }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-6 p-6">
            <canvas id="pendaftaranChart" width="400" height="200"></canvas>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('pendaftaranChart').getContext('2d');
        const pendaftaranChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Pendaftar', 'Diterima', 'Ditolak', 'Pending', 'Seleksi', 'Tes Minat Bakat', 'Registrasi Ulang'],
                datasets: [{
                    label: 'Jumlah Pendaftar',
                    data: [
                        {{ $totalPendaftar }}, {{ $diterima }}, {{ $ditolak }}, {{ $pending }},
                        {{ $seleksi }}, {{ $tes }}, {{ $registrasi }},
                    ],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                        stepSize: 1
                    }
                    }
                }
            }
        });
    </script>
</x-app-layout>
