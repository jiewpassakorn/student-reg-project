<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ClassDetail;
use App\Models\CourseDetail;
use App\Models\Department;
use App\Models\Registration;
use App\Models\Schedule;
use App\Models\Teacher;

class StudentController extends Controller
{
    function login () {
        return view('student.login');
    } 

    function myinfo() {
        $students = Student::all();
        return view('student.myinfo',compact('students'));
    }

    function welcome () {
        return view('student.welcome');
    }

    function regis() {
        $coursedetails = CourseDetail::all();
        $schedules = Schedule::all();
        return view('student.regis',compact('coursedetails','schedules'));
    }

    function schedule() {
        return view('student.schedule');
    }
     
    function grading() {
        return view('student.grading');
    }
}
