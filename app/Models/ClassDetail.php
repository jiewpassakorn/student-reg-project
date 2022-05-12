<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'ClassID',
        'CourseID',
        'Section',
        'Semester'
    ];

    public function schedules(){
        return $this->hasOne(Schedule::class,'ClassID','ClassID');
    }
}
