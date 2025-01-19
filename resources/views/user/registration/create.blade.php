<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pendaftaran Siswa') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Form Pendaftaran Siswa</h3>
            </div>

            @if(Auth::user()->students()->exists())
                <div class="alert alert-warning m-4">
                    Kamu sudah melakukan registrasi.
                </div>
                <div class="alert alert-success m-4">
                    Harap menunggu informasi lebih lanjut dari admin untuk melakukan pembayaran.
                </div>
            @else
                <!-- Formulir Pendaftaran -->
                <form action="{{ route('registrations.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Form fields -->
                    <div class="card-body px-4">
                        <div class="mb-4">
                            <label for="name" class="form-label">Nama</label>
                            <input
                                type="text"
                                id="name"
                                class="form-control @error('name') is-invalid @enderror"
                                name="name"
                                value="{{ old('name', auth()->user()->name) }}"
                                readonly
                                required
                            >
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="address" class="form-label">Alamat</label>
                            <textarea class="form-control @error('address') is-invalid @enderror" name="address" required>{{ old('address') }}</textarea>
                            @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="birth_date" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" required>
                            @error('birth_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="school_origin" class="form-label">Sekolah Asal</label>
                            <input type="text" class="form-control @error('school_origin') is-invalid @enderror" name="school_origin" value="{{ old('school_origin') }}" required>
                            @error('school_origin') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="departments" class="form-label">Jurusan</label>
                            <select name="departments[]" class="form-select @error('departments') is-invalid @enderror" required>
                                <option value="" disabled selected>Pilih Departemen</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}" {{ in_array($department->id, old('departments', [])) ? 'selected' : '' }}>
                                        {{ $department->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('departments') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="ijazah" class="form-label">Upload Foto:</label>
                            <input type="hidden" name="document_type[]" value="Photo">
                            <input type="file" name="file[]" class="form-control" id="ijazah" required>
                        </div>

                        <div class="mb-3">
                            <label for="ijazah" class="form-label">Upload Ijazah:</label>
                            <input type="hidden" name="document_type[]" value="Ijazah">
                            <input type="file" name="file[]" class="form-control" id="ijazah" required>
                        </div>

                        <div class="mb-3">
                            <label for="akte" class="form-label">Upload Akte:</label>
                            <input type="hidden" name="document_type[]" value="Akte">
                            <input type="file" name="file[]" class="form-control" id="akte" required>
                        </div>
                    </div>

                    <div class="card-footer text-end px-4 py-3">
                        <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary btn-lg">Cancel</a>
                    </div>
                </form>
            @endif
        </div>
    </div>
</x-app-layout>
