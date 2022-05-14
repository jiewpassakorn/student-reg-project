<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'CourseID',
        'CourseName',
        'Credit',
        'DepartmentID'
    ];

    public function classdetail(){
        return $this->hasMany(ClassDetail::class,'CourseID','CourseID');
    }
}
