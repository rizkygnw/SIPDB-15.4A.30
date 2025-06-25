<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payments') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Payments List</h3>
                <a href="{{ route('payments.create') }}" class="btn btn-light btn-sm">
                    <i class="bi bi-cash-coin me-1"></i> Add Payment
                </a>
            </div>

            <div class="card-body">
                <!-- Search Form -->
                <form method="GET" action="{{ route('students.index') }}" class="mb-3">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search by name..." value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-hover table-bordered text-center align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Student</th>
                                <th>Payment Date</th>
                                <th>Amount</th>
                                <th>Receipt Number</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($payments as $payment)
                                <tr>
                                    {{-- <td>{{ $payment->id }}</td> --}}
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="fw-semibold">{{ $payment->student->name }}</td>
                                    <td>{{ $payment->payment_date }}</td>
                                    <td>Rp{{ number_format($payment->amount, 0, ',', '.') }}</td>
                                    <td>{{ $payment->receipt_number }}</td>
                                    <td>
                                        <a href="{{ route('payments.edit', $payment) }}" class="btn btn-warning btn-sm me-1">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <form action="{{ route('payments.destroy', $payment) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">No Payments Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
