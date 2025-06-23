<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-700 rounded-xl shadow-lg">
            <h2 class="font-semibold text-3xl text-white leading-tight py-2 px-4">
                {{ __('Pendaftaran Siswa') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-10 bg-gradient-to-br from-slate-50 via-emerald-50 to-teal-50 min-h-screen">
        <div class="w-full mx-auto px-4">
            <div class="bg-white border border-slate-200 rounded-2xl shadow-xl overflow-hidden">

                <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-4">
                    <h3 class="text-white text-xl font-semibold">Form Pendaftaran Siswa</h3>
                </div>

                @if(Auth::user()->students()->exists())
                    <div class="p-6 space-y-4">
                        <div class="bg-yellow-100 border border-yellow-300 text-yellow-800 px-4 py-3 rounded-lg">
                            Kamu sudah melakukan registrasi.
                        </div>
                        <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded-lg">
                            Harap menunggu informasi lebih lanjut dari admin untuk melakukan pembayaran.
                        </div>
                    </div>
                @else
                    <form action="{{ route('registrations.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="p-6 space-y-6">
                            <!-- Form Fields in Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Nama</label>
                                    <input type="text" id="name" name="name" class="w-full rounded-lg border-slate-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500" value="{{ old('name', auth()->user()->name) }}" readonly required>
                                    @error('name') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                                </div>

                                <div>
                                    <label for="birth_date" class="block text-sm font-medium text-slate-700 mb-1">Tanggal Lahir</label>
                                    <input type="date" name="birth_date" class="w-full rounded-lg border-slate-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500" value="{{ old('birth_date') }}" required>
                                    @error('birth_date') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                                </div>

                                <div class="md:col-span-2">
                                    <label for="address" class="block text-sm font-medium text-slate-700 mb-1">Alamat</label>
                                    <textarea name="address" class="w-full rounded-lg border-slate-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500" rows="3" required>{{ old('address') }}</textarea>
                                    @error('address') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                                </div>

                                <div>
                                    <label for="school_origin" class="block text-sm font-medium text-slate-700 mb-1">Sekolah Asal</label>
                                    <input type="text" name="school_origin" class="w-full rounded-lg border-slate-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500" value="{{ old('school_origin') }}" required>
                                    @error('school_origin') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                                </div>

                                <div>
                                    <label for="departments" class="block text-sm font-medium text-slate-700 mb-1">Jurusan</label>
                                    <select name="departments[]" class="w-full rounded-lg border-slate-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500" required>
                                        <option value="" disabled selected>Pilih Departemen</option>
                                        @foreach($departments as $department)
                                            <option value="{{ $department->id }}" {{ in_array($department->id, old('departments', [])) ? 'selected' : '' }}>
                                                {{ $department->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('departments') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <!-- Upload Dokumen -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1">Upload Foto</label>
                                    <input type="hidden" name="document_type[]" value="Photo">
                                    <input type="file" name="file[]" class="w-full rounded-lg border-slate-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1">Upload Ijazah</label>
                                    <input type="hidden" name="document_type[]" value="Ijazah">
                                    <input type="file" name="file[]" class="w-full rounded-lg border-slate-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-1">Upload Akte</label>
                                    <input type="hidden" name="document_type[]" value="Akte">
                                    <input type="file" name="file[]" class="w-full rounded-lg border-slate-300 shadow-sm focus:ring-emerald-500 focus:border-emerald-500" required>
                                </div>
                            </div>
                        </div>

                        <div class="bg-slate-100 px-6 py-4 flex justify-end space-x-3 rounded-b-2xl border-t border-slate-200">
                            <a href="{{ route('students.index') }}" class="inline-flex items-center px-5 py-2 rounded-lg border border-slate-300 text-slate-700 bg-white hover:bg-slate-100 shadow-sm transition">Cancel</a>
                            <button type="submit" class="inline-flex items-center px-5 py-2 rounded-lg bg-emerald-600 text-white font-medium hover:bg-emerald-500 shadow-md transition">Daftar</button>
                        </div>
                    </form>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
