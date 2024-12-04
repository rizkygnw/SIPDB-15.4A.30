<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserDataRequest extends FormRequest
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
            'email' => 'required|email:user_data,email,' . $this->route('userdata'),
            'password' => 'nullable|min:8',
            'role' => 'required|string|in:admin,student',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Masukkan Nama!',
            'email.required' => 'Masukkan Email',
            'email.email' => 'Format Email Tidak Valid',
            'email.unique' => 'Email Sudah Digunakan',
            'password.min' => 'Password Minimal 8 Karakter',
            'role.required' => 'Role Belum Diisi',
            'role.in' => 'Role Harus Salah Satu dari admin atau student',
        ];
    }
