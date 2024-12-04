<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:departments,name',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Nama departemen harus diisi.',
            'name.string' => 'Nama departemen harus berupa teks.',
            'name.max' => 'Nama departemen tidak boleh lebih dari 255 karakter.',
            'name.unique' => 'Nama departemen sudah terdaftar.',
        ];
    }
}
