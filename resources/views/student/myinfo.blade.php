@extends('layouts.default')
@section('title','Student | information')
@section('content')

<div class="height-100 bg-light" style="margin-right: 10px;">
    <div class="container">
            <div class="row mt-5 p-2">
                <div class="col-sm-12 mt-3 pt-3 justify-content-center">
                    <h4> ประวัตินักศึกษา Name: {{Auth::user()->name}} </h4></button> 
                </div>
            </div>
            <hr>
            <div class="row d-grid justify-content-center">
                 <div class="container mt-3">
                   <div class="col-sm-12 justify-content-around shadow p-4  mb-4 bg-body rounded" ></div>
                 </div>
           </div>
           <div class="row d-flex">
               <div class="col-12 mt-2 d-flex justify-content-center">
                  <a href="#saveProfile"><button class="btn ms-sm-5 mx-2 btn-success">เพิ่มข้อมูล</button></a> 
                  <a href="#saveProfile"><button class="btn ms-sm-5 mx-2 btn-secondary">แก้ไขข้อมูล</button></a> 
               </div>
           </div>

    <!-- test form -->
    <div class="container rounded bg-white mt-5 mb-5 shadow-lg">
        <div class="row">
            <div class="col-md-2 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold">Edogaru</span>
                    <span class="text-black-50">edogaru@mail.com.my</span>
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
                        <div class="col-md-12"><label class="labels">Student ID.</label><input type="text" name="studentid" class="form-control" placeholder="630xxxxxxxx" value="" ></div>
                        
                        <!-- <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div> -->
                    </div>
                    <div class="row mt-3">

                        <div class="col-md-12"><label class="labels">Name</label><input type="text" name="StudentName" class="form-control" placeholder="full name" value=""></div>             
                        <div class="col-md-12"><label class="labels">DOB</label><input type="date" name = "DOB" class="form-control" placeholder="enter dob" value=""></div>
                        <div class="col-md-12"><label class="labels">Address</label><input type="text" name = "Address" class="form-control" placeholder="enter address" value=""></div>
                        <div class="col-md-12"><label class="labels">Department</label><input type="text" name = "Department" class="form-control" placeholder="computer engineering" value="" disabled></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="email" name ="Email" class="form-control" placeholder="enter email" value=""></div>
                        <div class="col-md-12"><label class="labels">Phone</label><input type="text" name ="Phone" class="form-control" placeholder="enter phone number" value=""></div>
                        <div class="col-md-12"><label class="labels">Status</label><input type="text" name ="Status" class="form-control" placeholder="status" value="" ><br></div>
                        <div class="col-md-12"><label class="labels">Sex</label><input list="Sex" name = "Sex"><datalist id="Sex"><option value="M"><option value="F"><option value="U"></datalist></div>
                        <div class="col-md-12"><label class="labels">Advisor</label><input type="text" name ="Advisor" class="form-control" placeholder="Advisor name" value="" disabled></div>
                    </div>
                    <div class="mt-5 text-center"><input type="submit" value="Save Profile" class="btn btn-primary profile-button" ></div>
                </form>

            </div>
        </div>
           
    </div>
</div>