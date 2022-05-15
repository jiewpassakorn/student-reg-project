<?php

namespace app\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class myinfoController extends Controller
{
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
        $data["TeacherID"] = $request -> TeacherID;

        $check = DB::table('students') 
                    -> where ('studentid', '=', $data["studentid"])
                    -> get();
        /* dd($check); */

        if(is_null($check)){
            dd($check);
            DB :: table('students') -> insert($data);
            return redirect() -> back() -> with('success', "บันทึกข้อมูลเรียบร้อย"); 
        }
        
        else{
            DB::table('students')->where('StudentID',$data["studentid"])->update($data); 
            return redirect() -> back() -> with('success', "บันทึกข้อมูลเรียบร้อย");
        }
        
        
        
        
        
  
        

        
    }
}

?>