<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\DB;


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

    public function teacherAdd(Request $request){
        $request->validate([
            'TeacherID' => 'required'
        ]);
        
        $teacher = new Teacher;
        $teacher->TeacherID = $request->TeacherID;
        $teacher->TeacherName = $request->TeacherName;
        $teacher->Address = $request->Address;
        $teacher->Email = $request->Email;
        $teacher->Phone = $request->Phone;
        $teacher->DepartmentID = $request->DepartmentID;
        $teacher -> save();
        

    }

    
}
