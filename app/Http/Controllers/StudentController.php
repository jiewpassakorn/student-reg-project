<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\CourseDetail;
use App\Models\ClassDetail;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\facades\DB;


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
      /*   global $data;
        $data = array();
        $data["ClassID"] = $request->ClassID;
        $data["RegStatus"] = "Wait";
        $data["StudentID"] = $student_id;
        DB :: table('registrations') -> insert($data); */

        /* dd($data);  */

        $registration = new Registration;
        $registration->ClassID = $request->ClassID;
        $registration->RegStatus = "Wait";
        $registration->StudentID = $student_id;
        $registration->save();
        
       
        return redirect() -> back() -> with('success', "บันทึกข้อมูลเรียบร้อย");
        

    }

    public function submit(Request $request){
        $student_id = Auth::user()->student_licence_number;
        /* $sql = "UPDATE registrations SET RegStatus='Ready' WHERE StudentID=$student_id";
        query($sql); */
        DB::table('registrations')->where('StudentID',$student_id)->update(array(
            'RegStatus'=>"Ready",));

       
            

        return redirect() -> back() -> with('success', "บันทึกข้อมูลเรียบร้อย");
    }

    public function delete($ClassID){
        $select=$ClassID;
        $delete=Registration::where('ClassID',$select)->delete();
        return redirect()->back()->with('success', "ลบข้อมูลเรียบร้อย");
    }

    public function join(){
        // $coursedetails = CourseDetail::all('CousreID')->get();
        // $classdetails = ClassDetail::with('CousreID')->get();
        // $registrations = Registration::with('ClassID')->get();

     
        return view('student.regis',compact('coursedetails','classdetails','registrations'));
    }
}
