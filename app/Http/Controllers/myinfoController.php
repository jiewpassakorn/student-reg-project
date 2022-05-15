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

        /* $check = DB::table('students') 
                    -> where ('studentid', '=', $data["studentid"])
                    -> get();
        dd($check);

        if(empty($check)){
            dd($check);
            DB :: table('students') -> insert($data);
            return redirect() -> back() -> with('success', "บันทึกข้อมูลเรียบร้อย"); 
        }
        
        else{
            dd($check);
            DB::table('students')->where('StudentID',$data["studentid"])->update($data); 
            return redirect() -> back() -> with('success', "บันทึกข้อมูลเรียบร้อย");
        } */
        DB :: table('students') -> insert($data);
        return redirect() -> back() -> with('success', "บันทึกข้อมูลเรียบร้อย");

            
        
    }

    public function UpdateStudent(Request $request) {
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

        /* $check = DB::table('students') 
                    -> where ('studentid', '=', $data["studentid"])
                    -> get();
        dd($check);

        if(empty($check)){
            dd($check);
            DB :: table('students') -> insert($data);
            return redirect() -> back() -> with('success', "บันทึกข้อมูลเรียบร้อย"); 
        }
        
        else{
            dd($check);
            DB::table('students')->where('StudentID',$data["studentid"])->update($data); 
            return redirect() -> back() -> with('success', "บันทึกข้อมูลเรียบร้อย");
        } */
        DB::table('students')->where('StudentID',$data["studentid"])->update($data); 
            return redirect('student/information') -> with('success', "บันทึกข้อมูลเรียบร้อย");

            

        
    }
}

?>