<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'registration_date' => 'required|date',
            'status' => 'required|string|max:50',
        ];
    }
    public function messages()
    {
        return [
            'student_id.required' => 'ID siswa harus diisi.',
            'student_id.exists' => 'ID siswa tidak valid.',
            'registration_date.required' => 'Tanggal pendaftaran harus diisi.',
            'registration_date.date' => 'Tanggal pendaftaran harus berupa tanggal yang valid.',
            'status.required' => 'Status harus diisi.',
            'status.string' => 'Status harus berupa teks.',
            'status.max' => 'Status tidak boleh lebih dari 50 karakter.',
        ];
    }
}
