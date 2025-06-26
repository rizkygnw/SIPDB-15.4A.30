<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Activity Logs') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
                <h3 class="mb-0">Recent Activities</h3>
            </div>

            <div class="card-body">
                <div class="alert alert-info mb-3">
                    <i class="bi bi-info-circle me-2"></i> Silakan refresh halaman jika log belum muncul.
                </div>

                <div class="d-flex justify-content-end mb-3">
                    <button id="btn-hapus-log" type="button" class="btn btn-danger">
                        <i class="bi bi-trash-fill me-1"></i> Hapus Semua Log
                    </button>

                    <form id="form-hapus-log" action="{{ route('logs.destroy.all') }}" method="POST" class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>

                <!-- Search Form -->
                <form method="GET" action="{{ route('students.index') }}" class="mb-3">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search by name..." value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>User</th>
                                <th>Description</th>
                                <th>Log Name</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($logs as $log)
                                <tr>
                                    <td>{{ $log->causer->name ?? 'Guest' }}</td>
                                    <td class="text-start">{{ $log->description }}</td>
                                    <td>{{ $log->log_name }}</td>
                                    <td>{{ $log->created_at->format('d M Y, H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-muted">No activity logs found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $logs->links() }}
                </div>
            </div>
        </div>
    </div>
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sukses!',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK',
            confirmButtonColor: '#3085d6'
        });
    </script>
    @endif

    {{-- Hapus Log --}}
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const tombol = document.getElementById('btn-hapus-log');
        const form = document.getElementById('form-hapus-log');

        if (tombol && form) {
            tombol.addEventListener('click', function (e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Yakin ingin menghapus semua log?',
                    text: 'Tindakan ini tidak dapat dibatalkan!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        }
    });
    </script>
</x-app-layout>
