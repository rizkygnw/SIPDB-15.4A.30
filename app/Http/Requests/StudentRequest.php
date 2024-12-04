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
            'address' => 'required|string|max:500',
            'birth_date' => 'required|date',
            'school_origin' => 'nullable|string|max:255',
            'status' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.required' => 'Masukkan ID Pengguna',
            'name.required' => 'Masukkan Nama Pengguna',
            'address.required' => 'Masukkan Alamat',
            'birth_date.required' => 'Masukkan Tanggal Lahir',
            'birth_date.date' => 'Tanggal Lahir Harus Valid!',
            'status.required' => 'Masukkan Status',
        ];
    }
}
