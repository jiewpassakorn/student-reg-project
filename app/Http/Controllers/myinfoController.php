<?php

namespace app\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class myinfoController extends Controller
{
    public function store(Request $request) {
        //send data to DB
        $data = array();
        $data["studentid"] = $request -> studentid;

        DB :: table('student') -> insert($data);
        return redirect() -> back -> with('success', "บันทึกข้อมูลเรียบร้อย");

    }
}

?>