<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function index() {
        return view('teacher.welcome');
    }

    function report() {
        return view('teacher.report');
    }
}
