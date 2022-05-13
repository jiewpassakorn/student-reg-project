<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'StudentID',
        'StudentName',
        'TeacherID',
        'DOB',
        'Address',
        'DepartmentID',
        'Email',
        'Phone',
        'Status',
        'Sex',
        'Password'
    ];

    public function departments(){
        return $this->hasOne(Department::class,'DepartmentID','DepartmentID');
    }
}
