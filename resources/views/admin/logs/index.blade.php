<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Activity Logs') }}
        </h2>
    </x-slot>

    {{-- Konten utama --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>Silahkan Refresh Jika Log Tidak Muncul</h1><br>
            <table class="min-w-full bg-white shadow-md rounded">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left">User</th>
                        <th class="px-4 py-2 text-left">Description</th>
                        <th class="px-4 py-2 text-left">Log Name</th>
                        <th class="px-4 py-2 text-left">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($logs as $log)
                        <tr>
                            <td class="px-4 py-2">{{ $log->causer->name ?? 'Guest' }}</td>
                            <td class="px-4 py-2">{{ $log->description }}</td>
                            <td class="px-4 py-2">{{ $log->log_name }}</td>
                            <td class="px-4 py-2">{{ $log->created_at }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-2 text-center">No activity logs found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{-- Pagination links --}}
            <div class="mt-4">
                {{ $logs->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
