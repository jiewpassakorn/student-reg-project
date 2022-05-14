<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\CourseDetail;
use App\Models\ClassDetail;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function dashboard(){
        $users = User::all();
        return view('admin.users.dashboard', compact('users'));
        
    }

    function studentManage(){
        $studentsinfo = Student::Join('departments', 'students.DepartmentID', '=', 'departments.DepartmentID')
        ->select('students.*','departments.DepartmentName','departments.FacultyName')
        ->get();
        return view('admin.manage.student',compact('studentsinfo'));
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
        $registrations = Registration::all();
        return view('admin.manage.course',compact('courseinfo','classinfo','registrations'));
    }

    public function studentManage_add(Request $request) {

        

        $request->validate([
            'studentid' => 'required|unique:students',
            'StudentName' => 'required',
            'DOB' => 'required',
            'Address' => 'required',
            'DepartmentID' => 'required',
            'Email' => 'required',
            'Phone' => 'required',
            'Status' => 'required',
            'Sex' => 'required',
         ],
         [
             'studentid.required'=>"กรุณาป้อนรหัสนักศึกษาด้วยครับ",
             'studentid.unique'=>"รหัสนักศึกษานี้มีอยู่ในระบบแล้ว",
             'StudentName.required'=>"กรุณาป้อนชื่อนักศึกษาด้วยครับ",
             'DOB.required'=>"กรุณาป้อนวันเกิดด้วยครับ",
             'Address.required'=>"กรุณาป้อนที่อยู่ด้วยครับ",
             'DepartmentID.required'=>"กรุณาเลือกคณะด้วยครับ",
             'Email.required'=>"กรุณาระบุอีเมลด้วยครับ",
             'Phone.required'=>"กรุณาป้อนเบอร์ด้วยครับ",
             'Status.required'=>"กรุณาป้อนสถานภาพด้วยครับ",
             'Sex.required'=>"กรุณาระบุด้วยครับ",
         ]
         );
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

    public function studentManage_edit($StudentID){
        $select=$StudentID;
        $student=Student::where('StudentID',$select)->get();
        dd($student);
        return view('admin.manage.student',compact('student'));
    }


    public function studentManage_delete($StudentID){
        $select=$StudentID;
        $delete=Student::where('StudentID',$select)->delete();
        return redirect()->back()->with('success', "ลบข้อมูลเรียบร้อย");
    }

    function sectionManage(){
        return view('admin.manage.section');
    }
}
