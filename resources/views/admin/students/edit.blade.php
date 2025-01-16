<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <!-- Card Header -->
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Edit Student</h3>
            </div>

            <!-- Card Body -->
            <div class="card-body">
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Name Field -->
                    <div class="mb-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control form-control-lg" value="{{ old('name', $student->name) }}" required>
                    </div>

                    <!-- Address Field -->
                    <div class="mb-4">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" id="address" class="form-control form-control-lg" required>{{ old('address', $student->address) }}</textarea>
                    </div>

                    <!-- Birth Date Field -->
                    <div class="mb-4">
                        <label for="birth_date" class="form-label">Birth Date</label>
                        <input type="date" name="birth_date" id="birth_date" class="form-control form-control-lg" value="{{ old('birth_date', $student->birth_date) }}" required>
                    </div>

                    <!-- School Origin Field -->
                    <div class="mb-4">
                        <label for="school_origin" class="form-label">School Origin</label>
                        <input type="text" name="school_origin" id="school_origin" class="form-control form-control-lg" value="{{ old('school_origin', $student->school_origin) }}" required>
                    </div>

                    <!-- Status Field -->
                    <div class="mb-4">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select form-select-lg" required>
                            <option value="Pendaftaran" {{ old('status') == 'Pendaftaran' ? 'selected' : '' }}>Pendaftaran</option>
                            <option value="Seleksi" {{ old('status') == 'Seleksi' ? 'selected' : '' }}>Seleksi</option>
                            <option value="Tes Minat Bakat" {{ old('status') == 'Tes Minat Bakat' ? 'selected' : '' }}>Tes Minat Bakat</option>
                            <option value="Registrasi Ulang" {{ old('status') == 'Registrasi Ulang' ? 'selected' : '' }}>Registrasi Ulang</option>
                            <option value="Diterima" {{ old('status') == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                            <option value="Ditolak" {{ old('status') == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-lg">Update Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
