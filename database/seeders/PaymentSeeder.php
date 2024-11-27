<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Symfony\Component\Clock\now;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payment::create([
            'student_id' => 1,
            'payment_date' => now(),
            'amount' => 500.00,
            'receipt_number' => 'REC123456',
        ]);

        Payment::create([
            'student_id' => 2,
            'payment_date' => now(),
            'amount' => 500.00,
            'receipt_number' => 'REC123456',
        ]);

        Payment::create([
            'student_id' => 3,
            'payment_date' => now(),
            'amount' => 500.00,
            'receipt_number' => 'REC123456',
        ]);

        Payment::create([
            'student_id' => 4,
            'payment_date' => now(),
            'amount' => 500.00,
            'receipt_number' => 'REC123456',
        ]);

        Payment::create([
            'student_id' => 5,
            'payment_date' => now(),
            'amount' => 500.00,
            'receipt_number' => 'REC123456',
        ]);
    }
}
