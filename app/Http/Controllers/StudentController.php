<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function login () {
        return view('student.login');
    } 

    function myinfo() {
        return view('student.myinfo');
    }

    function welcome () {
        return view('student.welcome');
    }

    function regis() {
        return view('student.regis');
    }

    function schedule() {
        return view('student.schedule');
    }
     
    function grading() {
        return view('student.grading');
    }
}
