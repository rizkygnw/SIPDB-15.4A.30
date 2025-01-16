<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <h1>Payments</h1>
            <a href="{{ route('payments.create') }}" class="btn btn-primary">Add Payment</a>
            <table class="table mt-3">
                <thead>
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
                    @foreach ($payments as $payment)
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td>{{ $payment->student->name }}</td>
                        <td>{{ $payment->payment_date }}</td>
                        <td>{{ $payment->amount }}</td>
                        <td>{{ $payment->receipt_number }}</td>
                        <td>
                            <a href="{{ route('payments.edit', $payment) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('payments.destroy', $payment) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
