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
        return $this->belongsTo(User::class, 'user_id');
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'department_student');
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
