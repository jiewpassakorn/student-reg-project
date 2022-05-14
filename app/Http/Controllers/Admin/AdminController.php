<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
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

    public function store(Request $request) {
        //send data to DB
        $data = array();
        $data["studentid"] = $request -> studentid;
        $data["StudentName"] = $request -> StudentName;
        $data["DOB"] = $request -> DOB;
        $data["Address"] = $request -> Address;

        $data["DepartmentID"] = $request -> DepartmentID;
        $data["Email"] = $request -> Email;
        $data["Phone"] = $request -> Phone;
        $data["Status"] = $request -> Status;
        $data["Sex"] = $request -> Sex;
        

        DB :: table('students') -> insert($data);
        return redirect() -> back() -> with('success', "บันทึกข้อมูลเรียบร้อย");

    }
}
