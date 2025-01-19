<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documents') }}
        </h2>
    </x-slot>

    <div class="table-responsive">
        <div class="container"><br>
            <table class="table table-hover table-bordered text-center align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Student</th>
                        <th>Photo</th>
                        <th>Ijazah</th>
                        <th>Akte</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($documents as $studentDocuments)
                        @php
                            $student = $studentDocuments->first()->student;
                            $photo = $studentDocuments->where('document_type', 'Photo')->first();
                            $ijazah = $studentDocuments->where('document_type', 'Ijazah')->first();
                            $akte = $studentDocuments->where('document_type', 'Akte')->first();
                        @endphp
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>
                                @if($photo)
                                    <a href="{{ Storage::url($photo->file_path) }}" target="_blank" class="btn btn-info">View</a>
                                    <a href="{{ Storage::url($photo->file_path) }}" download class="btn btn-success">Download</a>
                                @else
                                    <span>No Photo</span>
                                @endif
                            </td>
                            <td>
                                @if($ijazah)
                                    <a href="{{ Storage::url($ijazah->file_path) }}" target="_blank" class="btn btn-info">View</a>
                                    <a href="{{ Storage::url($ijazah->file_path) }}" download class="btn btn-success">Download</a>
                                @else
                                    <span>No Ijazah</span>
                                @endif
                            </td>
                            <td>
                                @if($akte)
                                    <a href="{{ Storage::url($akte->file_path) }}" target="_blank" class="btn btn-info">View</a>
                                    <a href="{{ Storage::url($akte->file_path) }}" download class="btn btn-success">Download</a>
                                @else
                                    <span>No Akte</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('documents.edit', $studentDocuments->first()->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('documents.destroy', $studentDocuments->first()->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
