<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'birth_date' => 'required|date',
            'school_origin' => 'required|string|max:255',
            'status' => 'required|string|max:50',
        ];
    }
    public function messages()
    {
        return [
            'user_id.required' => 'User ID harus diisi.',
            'user_id.exists' => 'User ID tidak valid.',
            'name.required' => 'Nama harus diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',
            'address.required' => 'Alamat harus diisi.',
            'address.string' => 'Alamat harus berupa teks.',
            'birth_date.required' => 'Tanggal lahir harus diisi.',
            'birth_date.date' => 'Tanggal lahir harus berupa tanggal yang valid.',
            'school_origin.required' => 'Asal sekolah harus diisi.',
            'school_origin.string' => 'Asal sekolah harus berupa teks.',
            'school_origin.max' => 'Asal sekolah tidak boleh lebih dari 255 karakter.',
            'status.required' => 'Status harus diisi.',
            'status.string' => 'Status harus berupa teks.',
            'status.max' => 'Status tidak boleh lebih dari 50 karakter.',
        ];
    }
}
