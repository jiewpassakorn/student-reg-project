<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index () {
        $address = "123 Chiangmai, Thailand";
        $tel =  "06x - xxx - xxxx";
        $email = "tosndf@gmail.com";
        
        // return view('about',compact('address','tel','email'));
        return view('about')
        ->with('address',$address)
        ->with('tel',$tel)
        ->with('email',$email)
        ->with('error','404 NotFound หาข้อมูลไม่เจอ')
        ->with('status','บันทึกข้อมูลเสร็จเรียบร้อย');
    }
    function login () {
        return view('login');
    }
    function first () {
        return view('firstpage');
    }
    
}
