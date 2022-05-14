<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'ScheduleID',
        'TeacherIDdif',
        'ClassID',
        'Room',
        'Weekday',
        'Time'
    ];

    public function teachers(){
        return $this->hasOne(Teacher::class,'TeacherID','TeacherID');
    }

}
