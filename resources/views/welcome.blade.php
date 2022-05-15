@extends('layouts.default')
@section('title','Welcome')
@section('content')

<div class="height-100 bg-light" style="margin-right: 10px;">
    <div class="container">
            <div class="row mt-5 p-2">
                <div class="col-sm-12 mt-3 pt-3 justify-content-center">
                    <h2> Welcome, {{Auth::user()->name}} </h2> 
                </div>
            </div>
            <hr>

            @if(Auth::user()->role_id == '2')
              @if(is_null($studentsinfo))
              <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">ไม่พบข้อมูลประวัตินักศึกษา</h4>
                <p>โปรดกรอกข้อมูลประวัตินักศึกษาที่ <b>ข้อมูลประวัตินักศึกษา</b></p>
                <hr>
                <p class="mb-0">ไปที่ <b>ข้อมูลประวัตินักศึกษา</b> <a href="/student/information" class="btn btn-primary btn-sm">ข้อมูลประวัตินักศึกษา</a></p>
              </div>
              @endif
            @endif

          <div class="card">
            <div class="card-header">
              Update
            </div>
            <div class="card-body">
              <h5 class="card-title">Anoucement</h5>
              <p class="card-text">This is student register beta version.</p>
              <li>For student</li>
              <div class="container">If this is your first login, please fill your information correctly.</div>
              @if (auth()->user()->role_id == 2) 
                        <a href="{{route('myinfo')}}" class="btn btn-primary mt-2">Edit information</a>
              @endif
              
            </div>
            <div class="card-footer text-muted">
              2 days remaining
            </div>
          </div>
    </div>
  </div>