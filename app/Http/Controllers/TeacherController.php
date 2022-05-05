<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function login() {
        return view('teacher.login');
    }    

    function welcome() {
        return view('teacher.welcome');
    }
}
