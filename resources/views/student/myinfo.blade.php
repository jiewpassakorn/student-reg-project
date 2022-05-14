@extends('layouts.default')
@section('title','Student | information')
@section('content')

<div class="height-100 bg-light" style="margin-right: 10px;">
    <div class="container">
            <div class="row mt-5 p-2">
                <div class="col-sm-12 mt-3 pt-3 justify-content-center">
                    <h4><i class="fa-solid fa-address-card fa-sm"></i> ประวัตินักศึกษา</h4>
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Anoucement</h5>
                    <p class="card-text">This is student register beta version.</p>
                </div>
                <div class="card-footer text-muted">
                    2 days remaining
                </div>
            </div>
            
            {{-- alert message --}}
            @if(Session::has('success'))
                <div class="d-inline-flex mt-3">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        {{Session::get('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>                  
                </div> 
            @elseif(Session::has('wait'))
                <div class="d-inline-flex mt-3">
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                        {{Session::get('wait')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @elseif(Session::has('delete'))      
                <div class="d-inline-flex mt-3">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        {{Session::get('delete')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif

    <!-- test form -->
    <div class="container rounded bg-white mt-2 mb-5 shadow-lg">
        <div class="row">
            <div class="col-md-2 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold">{{Auth::user()->name}}</span>
                    <span class="text-black-50">{{Auth::user()->email}}</span>
                    <button type="button" class="btn btn-outline-primary mt-2">เปลี่ยนรูป</button>
                </div>
            </div>
            <div class="col-md-10 border-right">
                <form action = "{{route('adddatatoDB')}}"  method="POST">
                @csrf
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Student ID.</label><input type="text" name="studentid" class="form-control" value="{{Auth::user()->student_licence_number}}" readonly></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Name</label><input type="text" name="StudentName" class="form-control" value="{{Auth::user()->name}}"></div>             
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="labels mt-2">Department (required)<input type="text" class="form-control" value="{{$departments->DepartmentName}}" readonly>
                                    </label><input type="text" name="DepartmentID" class="form-control" value="{{Auth::user()->DepartmentID}}" hidden>
                                </div>
                                <div class="col-md-9"><label class="labels mt-2">DOB (required)</label><input type="date" name = "DOB" class="form-control" placeholder="enter dob" value=""></div>
                            </div>                            
                        </div>
                        <div class="col-md-12"><label class="labels mt-2">Address</label><input type="text" name = "Address" class="form-control" value=""></div>
                        
                        <div class="col-md-12"><label class="labels mt-2">Email</label><input type="email" name ="Email" class="form-control" value="{{Auth::user()->email}}" readonly></div>
                        <div class="col-md-12"><label class="labels mt-2">Phone (required)</label><input type="text" name ="Phone" class="form-control" placeholder="enter phone number" value=""></div>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mt-2">Sex (required)</label>
                                    <select class="form-select" aria-label="Default select example" name="Sex">
                                        <option value="" selected>Select your sex</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="U">Undefined</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="mt-2">Status (required)</label>
                                    <select class="form-select" aria-label="Default select example" name ="Status" >
                                        <option >Open this select menu</option>
                                        <option value="1" selected>Normal</option>
                                        <option value="2">Drop</option>
                                        <option value="3">Retired</option>
                                        <option value="4">Graduated</option>
                                    </select>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-12"><label class="labels mt-2">Advisor</label><input type="text" name ="Advisor" class="form-control" placeholder="Advisor name" value="" disabled></div>
                        
                    </div>
                    <div class="mt-4 text-center"><input type="submit" value="Save Profile" class="btn btn-primary profile-button" ></div>
                </form>       
            </div>
        </div>           
    </div>
    
    {{-- <div class="row d-flex">
        <div class="col-12 mb-3 d-flex justify-content-center">
            <a href="#saveProfile"><button class="btn ms-sm-5 mx-2 btn-success">เพิ่มข้อมูล</button></a> 
            <a href="#saveProfile"><button class="btn ms-sm-5 mx-2 btn-secondary">แก้ไขข้อมูล</button></a> 
        </div>
    </div>  --}}
</div>