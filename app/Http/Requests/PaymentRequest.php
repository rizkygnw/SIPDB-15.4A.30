<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'payment_date' => 'required|date',
            'amount' => 'required|numeric|min:0',
            'receipt_number' => 'required|string|unique:payments,receipt_number|max:255',
        ];
    }
    public function messages()
    {
        return [
            'student_id.required' => 'ID siswa harus diisi.',
            'student_id.exists' => 'ID siswa tidak valid.',
            'payment_date.required' => 'Tanggal pembayaran harus diisi.',
            'payment_date.date' => 'Tanggal pembayaran harus berupa tanggal yang valid.',
            'amount.required' => 'Jumlah pembayaran harus diisi.',
            'amount.numeric' => 'Jumlah pembayaran harus berupa angka.',
            'amount.min' => 'Jumlah pembayaran tidak boleh kurang dari 0.',
            'receipt_number.required' => 'Nomor tanda terima harus diisi.',
            'receipt_number.string' => 'Nomor tanda terima harus berupa teks.',
            'receipt_number.unique' => 'Nomor tanda terima sudah terdaftar.',
            'receipt_number.max' => 'Nomor tanda terima tidak boleh lebih dari 255 karakter.',
        ];
    }
}
