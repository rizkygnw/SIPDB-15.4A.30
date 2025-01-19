<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Add New Student</h3>
            </div>

            <!-- Card Body -->
            <div class="card-body">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control @error('address') is-invalid @enderror" name="address">{{ old('address') }}</textarea>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="birth_date" class="form-label">Birth Date</label>
                        <input type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}">
                        @error('birth_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="school_origin" class="form-label">School Origin</label>
                        <input type="text" class="form-control @error('school_origin') is-invalid @enderror" name="school_origin" value="{{ old('school_origin') }}">
                        @error('school_origin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" class="form-select @error('status') is-invalid @enderror">
                            <option value="">Select Status</option>
                            <option value="Pendaftaran" {{ old('status') == 'Pendaftaran' ? 'selected' : '' }}>Pendaftaran</option>
                            <option value="Seleksi" {{ old('status') == 'Seleksi' ? 'selected' : '' }}>Seleksi</option>
                            <option value="Tes Minat Bakat" {{ old('status') == 'Tes Minat Bakat' ? 'selected' : '' }}>Tes Minat Bakat</option>
                            <option value="Registrasi Ulang" {{ old('status') == 'Registrasi Ulang' ? 'selected' : '' }}>Registrasi Ulang</option>
                            <option value="Diterima" {{ old('status') == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                            <option value="Ditolak" {{ old('status') == 'Test' ? 'selected' : '' }}>Test</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-lg">Save</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary btn-lg">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
