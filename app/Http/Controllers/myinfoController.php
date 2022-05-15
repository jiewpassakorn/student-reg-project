<?php

namespace app\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class myinfoController extends Controller
{
    public function store(Request $request) {

        $request->validate([
            'studentid' => 'unique:students'
        ],[
            'studentid.unique' => "พบประวัตินักศึกษาในระบบแล้ว"
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
        $data["TeacherID"] = $request -> TeacherID;
        

        DB :: table('students') -> insert($data);
        return redirect() -> back() -> with('success', "บันทึกข้อมูลเรียบร้อย");
        
    }
}

?>