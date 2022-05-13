<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard(){

        $users = User::all();

        return view('admin.users.dashboard', compact('users'));
        
    }

    function studentManage(){
        return view('admin.manage.student');
    }

    function teacherManage(){
        return view('admin.manage.teacher');
    }

    function courseManage(){
        return view('admin.manage.course');
    }
}
