<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'registration_date',
        'status',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
