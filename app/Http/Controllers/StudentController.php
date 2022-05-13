<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\CourseDetail;
use App\Models\ClassDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $coursedetails = CourseDetail::all();
        $classdetails = ClassDetail::all();
        $registrations = Registration::all();
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
        $request->validate([
           
        ],
        [
           
        ]
        );

        // บันทึกข้อมูล

        // บันทึกแบบ eloquant
        $registration = new Registration;
        $registration->ClassID = $request->ClassID;
        $registration->Regstatus = "Ready";
        $registration->StudentID = Auth::user()->id;
        $registration->save();

        return redirect()->back()->with('success', "บันทึกข้อมูลเรียบร้อย");
    }
}
