<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <h1>Create Log</h1>

            <form action="{{ route('logs.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="user_id" class="form-label">User</label>
                    <select name="user_id" id="user_id" class="form-select" required>
                        <option value="">Select User</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="activity" class="form-label">Activity</label>
                    <textarea name="activity" id="activity" class="form-control" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>
