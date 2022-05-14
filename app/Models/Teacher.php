<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'TeacherID',
        'TeacherName',
        'Address',
        'Email',
        'Phone',
        'DepartmentID',
        
    ];
    public $timestamps = false;
}
