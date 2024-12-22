<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'student_id' => 'required|exists:students,id',
            'document_type' => 'required|string|max:255',
            'file' => 'required|string|max:255',
        ];
    }
    public function messages()
    {
        return [
            'student_id.required' => 'ID siswa harus diisi.',
            'student_id.exists' => 'ID siswa tidak valid.',
            'document_type.required' => 'Tipe dokumen harus diisi.',
            'document_type.string' => 'Tipe dokumen harus berupa teks.',
            'document_type.max' => 'Tipe dokumen tidak boleh lebih dari 255 karakter.',
            'file_path.required' => 'Path file harus diisi.',
            'file_path.string' => 'Path file harus berupa teks.',
            'file_path.max' => 'Path file tidak boleh lebih dari 255 karakter.',
        ];
    }
}
