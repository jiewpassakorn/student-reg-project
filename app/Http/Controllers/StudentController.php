<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\CourseDetail;
use App\Models\ClassDetail;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $classdetails = ClassDetail::all();
        $registrations = Registration::where('StudentID',Auth::user()->student_licence_number)->get();
        return view('student.regis',compact('coursedetails','classdetails','registrations'));
    }

    function schedule() {
        return view('student.schedule');
    }
     
    function grading() {
        return view('student.grading');
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
        //dd($request);
        $request->validate([
           
        ],
        [
           
        ]
        );

        // บันทึกข้อมูล

        // บันทึกแบบ eloquant

        $student_id = "63070501049";

        $registration = new Registration;
        $registration->ClassID = $request->ClassID;
        $registration->RegStatus = "Ready";
        $registration->StudentID = $student_id;
        $registration->save();

        return redirect()->back()->with('success', "บันทึกข้อมูลเรียบร้อย");
    }
}
