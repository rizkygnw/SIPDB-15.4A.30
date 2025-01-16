<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'payment_date',
        'amount',
        'receipt_number',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
