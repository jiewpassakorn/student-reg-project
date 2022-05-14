<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\CourseDetail;
use App\Models\ClassDetail;
use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class AdminController extends Controller
{
    function dashboard(){
        $users = User::all();
        return view('admin.users.dashboard', compact('users'));
        
    }

    function studentManage(){
        $students = Student::all();
        return view('admin.manage.student',compact('students'));
    }

    function teacherManage(){
        $teachersinfo = Teacher::Join('departments', 'teachers.DepartmentID', '=', 'departments.DepartmentID')
        ->select('teachers.TeacherID','teachers.TeacherName','teachers.Email','departments.DepartmentName','departments.FacultyName')
        ->get();
        return view('admin.manage.teacher',compact('teachersinfo'));
    }

    function courseManage(){
        $courseinfo = CourseDetail::Join('departments', 'course_details.DepartmentID', '=', 'departments.DepartmentID')
        ->select('course_details.CourseID','course_details.CourseName','course_details.Credit','departments.DepartmentName','departments.FacultyName')
        ->get();
        $classinfo = ClassDetail::Join('course_details', 'course_details.CourseID', '=', 'class_details.CourseID')
        ->select('course_details.CourseID','course_details.CourseName','class_details.ClassID','class_details.Section','class_details.Semester')
        ->get();
        return view('admin.manage.course',compact('courseinfo','classinfo'));
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
