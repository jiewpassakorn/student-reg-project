@extends('layouts.default')
@section('title','Manage | teacher')
@section('content')
<link rel="icon" type="image/x-icon" href="/images/kmutt-logo.png">

<br>
<br>
<div class="container ">
    <a class="btn btn-secondary" href="{{route('teacherManage')}}">กลับ</a>
</div>
<div class="container rounded bg-white mt-2 mb-5 shadow-lg">
    <div class="pt-3">
        <h2>แก้ไขข้อมูลอาจารย์</h2>
    </div>
    <hr>

    <form action="{{url('/admin/teacherManage/update/'.$teachers->TeacherID)}}" method="POST">
        @csrf
        <div class="modal-body">
                    <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12"><label class="labels">รหัสอาจารย์</label>
                                @error('TeacherID')<span class="text-danger py-2">({{$message}})</span>@enderror
                                <input type="text" name="TeacherID"class="form-control" placeholder="" value="{{$teachers->TeacherID}}"></div>
                                
                                <div class="col-md-12"><label class="labels">ชื่อ-สกุล</label>
                                @error('TeacherName')<span class="text-danger py-2">({{$message}})</span>@enderror
                                <input type="text" name="TeacherName" class="form-control" placeholder="" value="{{$teachers->TeacherName}}"></div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12"><label class="labels mt-3">ภาควิชา</label><label class="labels mt-3 text-danger">(required)</label>
                                @error('DepartmentID')<span class="text-danger py-2">({{$message}})</span>@enderror
                                    <select name="DepartmentID" class="form-select">
                                        <option value="">Select department...</option>
                                        @foreach($departments as $row)
                                            <option value="{{$row->DepartmentID}}">{{$row->DepartmentName}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-12 mt-2"><label class="labels">Email</label>
                                @error('Email')<span class="text-danger py-2">({{$message}})</span>@enderror
                                <input type="text" name="Email" class="form-control" placeholder="" value="{{$teachers->Email}}"></div>

                                <div class="col-md-12 mt-2"><label class="labels">เบอร์</label>
                                @error('Email')<span class="text-danger py-2">({{$message}})</span>@enderror
                                <input type="text" name="Phone" class="form-control" placeholder="" value="{{$teachers->Phone}}"></div>    

                                <div class="col-md-12 mt-2"><label class="labels">ที่อยู่</Address></label>
                                @error('Address')<span class="text-danger py-2">({{$message}})</span>@enderror
                                <input type="text" name="Address" class="form-control" placeholder="" value="{{$teachers->Address}}"></div>
                                
                            </div>
                    </div>
                </div>
                
                <div class="d-flex justify-content-center">
                    <div class="py-3">
                        <input type="submit" value="Save Profile" class="btn btn-primary profile-button add_button">
                    </div>
                </div>

    </form>
</div>