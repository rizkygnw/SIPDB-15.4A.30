<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogRequest extends FormRequest
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
            'user_id' => 'required|exists:user_data,id',
            'activity' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'user_id.required' => 'User ID harus diisi.',
            'user_id.exists' => 'User ID tidak valid.',
            'activity.required' => 'Aktivitas harus diisi.',
            'activity.string' => 'Aktivitas harus berupa teks.',
        ];
    }
}
