<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable = [
        'StudentID',
        'ClassID',
        'RegStatus',
        'Grade'
    ];

    public function classdetails(){
        return $this->hasOne(ClassDetail::class,'ClassID','ClassID');
    }

}
