<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Student') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Edit Student</h3>
                <a href="{{ route('students.index') }}" class="btn btn-light btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Back to List
                </a>
            </div>

            <div class="card-body">
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                   value="{{ old('name', $student->name) }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="birth_date" class="form-label">Birth Date</label>
                            <input type="date" name="birth_date" id="birth_date" class="form-control"
                                   value="{{ old('birth_date', $student->birth_date) }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="school_origin" class="form-label">School Origin</label>
                            <input type="text" name="school_origin" id="school_origin" class="form-control"
                                   value="{{ old('school_origin', $student->school_origin) }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select" required>
                                <option value="Pendaftaran" {{ old('status', $student->status) == 'Pendaftaran' ? 'selected' : '' }}>Pendaftaran</option>
                                <option value="Seleksi" {{ old('status', $student->status) == 'Seleksi' ? 'selected' : '' }}>Seleksi</option>
                                <option value="Tes Minat Bakat" {{ old('status', $student->status) == 'Tes Minat Bakat' ? 'selected' : '' }}>Tes Minat Bakat</option>
                                <option value="Registrasi Ulang" {{ old('status', $student->status) == 'Registrasi Ulang' ? 'selected' : '' }}>Registrasi Ulang</option>
                                <option value="Diterima" {{ old('status', $student->status) == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                                <option value="Ditolak" {{ old('status', $student->status) == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" id="address" class="form-control" rows="3" required>{{ old('address', $student->address) }}</textarea>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save me-1"></i> Update Student
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
