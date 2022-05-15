@extends('layouts.default')
@section('title','Manage | section')
@section('content')
<link rel="icon" type="image/x-icon" href="/images/kmutt-logo.png">

<br>
<br>

<div class="container mr-3">
    <a class="btn btn-secondary" href="{{route('sectionManage')}}">กลับ</a>
</div>
<div class="container rounded bg-white mt-2 mb-5 shadow-lg">
    <div class="pt-3">
        <h2>แก้ไขข้อมูลห้องเรียน</h2>
    </div>
    <hr>
    <form action = "{{url('/sectionManage/update/'.$classshow->ClassID)}}"  method="POST">
                @csrf
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">

                        <div class="col-md-12 mt-2"><label class="labels">รหัสคลาส</label>
                            @error('ClassID')<span class="text-danger py-2">({{$message}})</span>@enderror
                            <input type="text" name="ClassID" class="form-control" placeholder="" value="{{$classshow->ClassID}}" readonly>
                        </div>
                                
                                
                        <div class="col-md-4 mt-2">
                            <label class="labels">รหัสวิชา</label>
                            @error('CourseID')<span class="text-danger py-2">({{$message}})</span>@enderror
                                <select class="form-select" aria-label="Default select example" name="CourseID">
                                    <option value="{{$classshow->CourseID}}" selected>{{$classshow->CourseID}}</option>
                                    @foreach($CourseInfo as $row)
                                        <option value="{{$row->CourseID}}">{{$row->CourseID}}: {{$row->CourseName}}</option>
                                    @endforeach
                                </select>                                        
                        </div> 

                        <div class="col-md-4 mt-2"><label class="labels">กลุ่ม</label>
                            @error('Section')<span class="text-danger py-2">({{$message}})</span>@enderror
                            <input type="text" name="Section" class="form-control" value="{{$classshow->Section}}" placeholder="">
                        </div>
                                
                        <div class="col-md-4 mt-2"><label class="labels">ภาคการศึกษา</label>
                            @error('Semester')<span class="text-danger py-2">({{$message}})</span>@enderror
                            <input type="text" name="Semester" class="form-control" placeholder="" value="{{$classshow->Semester}}"></div>
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