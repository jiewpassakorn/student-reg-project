@extends('layouts.default')
@section('title','Manage | schedule')
<link rel="icon" type="image/x-icon" href="/images/kmutt-logo.png">
@section('content')

<div class="height-100 bg-light" style="margin-right: 10px;">
    <div class="container">
        <br>
        <br>
        <div class="d-flex bd-highlight">
            <div class="">
                <h1><i class="fa fa-calendar fa-xs"></i> จัดการข้อมูลตารางสอน</h1>
            </div>
        </div>

        <div class="row d-flex">
            <hr>
            <div class="col-12 mt-2 d-flex justify-content-center">
                <a href="#insertModal"><button class="btn ms-sm-5 mx-2 btn-success" data-bs-toggle="modal" data-bs-target="#insertScheduleModal">เพิ่มตารางสอน</button></a>
            </div>
            <table class="table table-striped shadow-sm text-center">
                
                {{-- alert message --}}
                @if(Session::has('success'))
                <div class="d-inline-flex">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                            <use xlink:href="#check-circle-fill" />
                        </svg>
                        {{Session::get('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                @elseif(Session::has('delete'))
                <div class="d-inline-flex">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                            <use xlink:href="#exclamation-triangle-fill" />
                        </svg>
                        {{Session::get('delete')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                @endif
                
            @if ($errors->any())
                <div class="d-inline-flex mt-3">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        {{'กรุณากรอกข้อมูลให้ถูกต้อง'}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            
            <table class="table table-striped shadow-sm text-center mt-2">
            <thead class="table table-dark">
                <tr>
                    <th>รหัสคลาส</th>
                    <th>อาจารย์ผู้สอน</th>
                    <th>ห้องเรียน</th>
                    <th>วัน</th>
                    <th>เวลา</th>
                    <th>จำนวนนักศึกษา</th>
                    <th>แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                @foreach($scheduleinfo as $row)
                <tr>
                    <th>{{$row->ClassID}}</th>
                    <td>{{$row->TeacherName}}</td>
                    <td>{{$row->Room}}</td>
                    <td>{{$row->Weekday}}</td>
                    <td>{{$row->Time}}</td>
                    <td>{{$registrations->where('RegStatus','Ready')->where('ClassID',$row->ClassID)->count()}}</td>
                    <td>
                        <a href="#"><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editModal">แก้ไขข้อมูล</button></a> 
                        <a onclick="return confirm('ยืนยันที่จะลบ คลาส {{$row->ClassID}} รายวิชา {{$row->CourseName}}')" href="{{url('/admin/SectionManage/delete/'.$row->ClassID)}}"><button class="btn btn-danger" >ลบข้อมูล</button></a>
                    </td>
                
                @endforeach
            </tbody>
        </table>
        {{$scheduleinfo->links()}}

        </div>
    </div>
</div>
<!--Container Main end-->

<!-- Modal เพิ่มตารางสอน -->
<div class="modal fade" id="insertScheduleModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">เพิ่มตารางสอน</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button> <!-- close button-->
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <form action="{{route('courseManage_add')}}" method="POST">
                        @csrf

                        
                            <div class="col-md-12 mt-2"><label class="labels">รหัสคลาส</label>
                                @error('CourseID')<span class="text-danger py-0">({{$message}})</span>@enderror
                                <input name="CourseID" style="text-transform: uppercase" type="text" class="form-control" placeholder="" value="">
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12 mt-2"><label class="labels">อาจารย์ผู้สอน</label>

                                @error('DepartmentID')<span class="text-danger py-0">({{$message}})</span>@enderror

                                    <select name="DepartmentID" class="form-select">
                                        <option value="" selected>Select teacher...</option>
                                        @foreach($departments as $row)
                                            <option value="{{$row->DepartmentID}}">{{$row->DepartmentName}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4 mt-2"><label class="labels">ห้องเรียน</label>
                                    @error('CourseName')<span class="text-danger py-0">({{$message}})</span>@enderror
                                    <input name="CourseName" type="text" class="form-control" placeholder="" value="">
                                </div>

                                <div class="col-md-4 mt-2"><label class="labels">วัน</label>
                                    @error('Credit')<span class="text-danger py-0">({{$message}})</span>@enderror
                                    <select name="DepartmentID" class="form-select">
                                        <option value="" selected>Select day...</option>
                                        <option value="Mon">Mon</option>
                                        <option value="Tue">Tue</option>
                                        <option value="Wed">Wed</option>
                                        <option value="Thu">Thu</option>
                                        <option value="Fri">Fri</option>
                                        <option value="Sat">Sat</option>
                                        <option value="Sun">Sun</option>
                                    </select>
                                </div>

                                <div class="col-md-4 mt-2"><label class="labels">เวลา</label>
                                    @error('Credit')<span class="text-danger py-0">({{$message}})</span>@enderror
                                    <input name="Credit" type="text" class="form-control" value="" placeholder="">
                                </div>
                            </div>                            
                            <div class="modal-footer mt-3">
                                <input type="submit" value="Save Profile" class="btn btn-primary profile-button add_button">
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>        
    </div>
</div>