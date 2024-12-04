<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'address',
        'birth_date',
        'school_origin',
        'status',
    ];

    public function userData()
    {
        return $this->belongsTo(UserData::class, 'user_id');
    }
}
