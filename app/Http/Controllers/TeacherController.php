<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\CourseDetail;
use App\Models\ClassDetail;
use App\Models\Registration;
use App\Models\Department;
use App\Models\Schedule;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function index() {
        return view('teacher.welcome');
    }

    function report() {
        $reportinfo = CourseDetail::Join('class_details', 'course_details.CourseID', '=', 'class_details.CourseID')
        ->select('course_details.CourseID', 'course_details.CourseName', 'class_details.ClassID', 'class_details.Section')
        ->get();
        $coursedetails = CourseDetail::all();
        $reportavg = Registration::where('RegStatus','Complete')
        ->select('registrations.ClassID', 'registrations.Grade', 'registrations.StudentID')
        ->get();
        $registrations = Registration::all();
        $reportstudent = Student::Join('registrations', 'students.StudentID', '=', 'registrations.StudentID')
        ->select('students.StudentID', 'students.StudentName')
        ->groupBy('students.StudentID','students.studentName')
        ->paginate(10);

        
        
        return view('teacher.report', compact('reportinfo', 'registrations', 'reportavg', 'coursedetails','reportstudent'));
    }
}
