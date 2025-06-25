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
</x-app-layout>
