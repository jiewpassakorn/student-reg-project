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
        $data["Email"] = $request -> Email;
        $data["Phone"] = $request -> Phone;
        $data["Status"] = $request -> Status;
        $data["Sex"] = $request -> Sex;
        $data["Password"] = $request -> Password;

        DB :: table('student') -> insert($data);
        return redirect() -> back() -> with('success', "บันทึกข้อมูลเรียบร้อย");

    }
}

?>