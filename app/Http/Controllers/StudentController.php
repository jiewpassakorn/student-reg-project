<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\CourseDetail;
use App\Models\ClassDetail;
use App\Models\Department;
use App\Models\Student;
use App\Models\teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\DB;


class StudentController extends Controller
{
    function login () {
        return view('student.login');
    } 

    function myinfo() {
        $users = User::all();
        $students = Student::all();
        $studentsinfo = Student::where('StudentID',Auth::user()->student_licence_number)
        ->select('students.StudentID','students.Phone','students.Sex','students.Status','students.DOB')
        ->first();
        $departments = Department::where('DepartmentID',Auth::user()->DepartmentID)
        ->select('departments.DepartmentID','departments.DepartmentName')->first();
        $teacherselect = Teacher::Join('departments', 'teachers.DepartmentID', '=', 'departments.DepartmentID')
        ->select('teachers.TeacherID','teachers.TeacherName','teachers.DepartmentID','departments.DepartmentName')
        ->get();
        $studentshowinfo = Student::where('StudentID',Auth::user()->student_licence_number)
        ->Join('departments', 'students.DepartmentID', '=', 'departments.DepartmentID')
        ->Join('teachers', 'students.TeacherID', '=', 'teachers.TeacherID')
        ->select('students.*','departments.DepartmentName','departments.FacultyName','teachers.TeacherName')
        ->first();
        return view('student.myinfo',compact('users','students','departments','studentsinfo','teacherselect','studentshowinfo'));
    }

    function welcome () {
        return view('student.welcome');
    }

    function regis() {
        $coursedetails = CourseDetail::all();
        $classdetails = ClassDetail::all();
        $coursejoin = CourseDetail::Join('class_details', 'course_details.CourseID', '=', 'class_details.CourseID')
        ->Join('schedules', 'class_details.ClassID', '=', 'schedules.ClassID')
        ->Join('teachers', 'schedules.TeacherIDdif', '=', 'teachers.TeacherID')
        ->select('course_details.CourseID','course_details.CourseName','course_details.Credit','class_details.ClassID','class_details.Section','schedules.Room','schedules.Weekday','schedules.Time','teachers.TeacherName')
        ->get();
        $registrationsinfo = Registration::where('StudentID',Auth::user()->student_licence_number)
        ->Join('class_details', 'registrations.ClassID', '=', 'class_details.ClassID')
        ->Join('course_details', 'class_details.CourseID', '=', 'course_details.CourseID')
        ->select('registrations.StudentID','registrations.RegStatus','registrations.ClassID','class_details.Section','course_details.CourseID','course_details.CourseName','course_details.Credit')
        ->get();
        $registrations = Registration::where('StudentID',Auth::user()->student_licence_number)->get();
        $credit = Registration::where('StudentID',Auth::user()->student_licence_number)
        ->Join('class_details', 'registrations.ClassID', '=', 'class_details.ClassID')
        ->Join('course_details', 'class_details.CourseID', '=', 'course_details.CourseID')
        ->select('course_details.Credit')
        ->sum('course_details.Credit');
        $studentsinfo = Student::where('StudentID',Auth::user()->student_licence_number)
        ->Join('departments', 'students.DepartmentID', '=', 'departments.DepartmentID')
        ->select('students.StudentID','students.StudentName','students.Email','students.status','departments.DepartmentName','departments.FacultyName')
        ->first();
        return view('student.regis',compact('coursedetails','classdetails','registrationsinfo','registrations','coursejoin','studentsinfo','credit'));
    }

    function schedule() {
        return view('student.schedule');
    }

    function grading() {
        return view('student.grading');
    }

    function edit(){
        $users = User::all();
        $students = Student::all();
        $studentsinfo = Student::where('StudentID',Auth::user()->student_licence_number)
        ->select('students.StudentID','students.StudentName','students.Phone','students.Sex','students.Status','students.DOB','students.Address')
        ->first();
        $departments = Department::where('DepartmentID',Auth::user()->DepartmentID)
        ->select('departments.DepartmentID','departments.DepartmentName')->first();
        $teacherselect = Teacher::Join('departments', 'teachers.DepartmentID', '=', 'departments.DepartmentID')
        ->select('teachers.TeacherID','teachers.TeacherName','teachers.DepartmentID','departments.DepartmentName')
        ->get();
        $studentshowinfo = Student::where('StudentID',Auth::user()->student_licence_number)
        ->Join('departments', 'students.DepartmentID', '=', 'departments.DepartmentID')
        ->Join('teachers', 'students.TeacherID', '=', 'teachers.TeacherID')
        ->select('students.*','departments.DepartmentName','departments.FacultyName','teachers.TeacherName')
        ->first();
        return view('student.edit',compact('users','students','departments','studentsinfo','teacherselect','studentshowinfo'));
    }

    // public function store(Request $request) {
    //     //send data to DB
    //     $data = array();
    //     $data["studentid"] = $request -> studentid;

    //     DB :: table('student') -> insert($data);
        
    //     return redirect() -> back -> with('success', "บันทึกข้อมูลเรียบร้อย");

    // }
    
    public function storeRegistration(Request $request) {
        // ตรวจสอบข้อมูล

        $request->validate([
            'ClassID' => 'required'
        ],
        [
            'ClassID.required'=>"กรุณาป้อนชื่อแผนกด้วยครับ",
        ]
        );

        // บันทึกข้อมูล

        // บันทึกแบบ eloquant
        $student_classid="C1AB01";

        
        $student_id = Auth::user()->student_licence_number;

        $registration = new Registration;
        $registration->ClassID = $request->ClassID;
        $registration->RegStatus = "Wait";
        $registration->StudentID = $student_id;
        $registration->save();
        
        return redirect() -> back() -> with('wait', "รอยืนยัน");
        // return redirect() -> back() -> with('success', "รอยืนยัน");
        

    }

    public function submit(Request $request){

        $student_id = Auth::user()->student_licence_number;

        DB::table('registrations')->where('StudentID',$student_id)->update(array(
            'RegStatus'=>"Ready",));
            
        return redirect() -> back() -> with('success', "บันทึกข้อมูลเรียบร้อย");
    }

    public function delete($ClassID){
        $select=$ClassID;
        $delete=Registration::where('ClassID',$select)->delete();

        return redirect()->back()->with('delete', "ลบข้อมูลเรียบร้อย");
        // return redirect()->back()->with('success', "ลบข้อมูลเรียบร้อย");
    }

    public function join(){
        // $coursedetails = CourseDetail::all('CousreID')->get();
        // $classdetails = ClassDetail::with('CousreID')->get();
        // $registrations = Registration::with('ClassID')->get();

        return view('student.regis',compact('coursedetails','classdetails','registrations'));
    }
}
