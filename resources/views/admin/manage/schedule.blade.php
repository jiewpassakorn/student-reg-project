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
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                            <use xlink:href="#exclamation-triangle-fill" />
                        </svg>
                        {{'กรุณากรอกข้อมูลให้ถูกต้อง'}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                @endif

                <table class="table table-striped shadow-sm text-center mt-2">
                    <thead class="table table-dark">
                        <tr>
                            <th>รหัสตารางสอน</th>
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
                            <td>{{$row->ScheduleID}}</td>
                            <td>{{$row->ClassID}}</td>
                            <td>{{$row->TeacherName}}</td>
                            <td>{{$row->Room}}</td>
                            <td>{{$row->Weekday}}</td>
                            <td>{{$row->Time}}</td>
                            <td>{{$registrations->where('RegStatus','Ready')->where('ClassID',$row->ClassID)->count()}}</td>
                            <td>
                                <a href="{{url('/admin/scheduleManage/edit/'.$row->ScheduleID)}}" class="btn btn-info">แก้ไขข้อมูล</button></a>
                                <a onclick="return confirm('ยืนยันที่จะลบ {{$row->ScheduleID}}')" href="{{url('/admin/scheduleManage/delete/'.$row->ScheduleID)}}"><button class="btn btn-danger">ลบข้อมูล</button></a>
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
                    <form action="{{route('scheduleManage_add')}}" method="POST">
                        @csrf

                        <div class="col-md-12 mt-2"><label class="labels">รหัสตารางสอน</label>
                            @error('ScheduleID')<span class="text-danger py-0">({{$message}})</span>@enderror
                            <input name="ScheduleID" type="text" class="form-control" placeholder="ScheduleID" value="">
                        </div>




                        <div class="row">
                            <div class="col-md-12 mt-2"><label class="labels">อาจารย์ผู้สอน</label>

                                @error('TeacherIDdif')<span class="text-danger py-0">({{$message}})</span>@enderror

                                <select name="TeacherIDdif" class="form-select">
                                    <option value="" selected>Select teacher...</option>
                                    @foreach($teachers as $row)
                                    <option value="{{$row->TeacherID}}">{{$row->TeacherID}} : {{$row->TeacherName}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12 mt-2"><label class="labels">รหัสคลาส</label>
                            @error('ClassID')<span class="text-danger py-2">({{$message}})</span>@enderror
                                <select class="form-select" aria-label="Default select example" name="ClassID">
                                    <option value="" selected>รหัสคลาส</option>
                                    @foreach($classinfo as $row)
                                    <option value="{{$row->ClassID}}">{{$row->ClassID}} : {{$row->ClassName}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4 mt-2"><label class="labels">ห้องเรียน</label>
                                @error('Room')<span class="text-danger py-0">({{$message}})</span>@enderror
                                <input name="Room" type="text" class="form-control" placeholder="Room" value="">
                            </div>

                            <div class="col-md-4 mt-2"><label class="labels">วัน</label>
                                @error('Weekday')<span class="text-danger py-0">({{$message}})</span>@enderror
                                <select name="Weekday" class="form-select">
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
                                @error('Time')<span class="text-danger py-0">({{$message}})</span>@enderror
                                <input name="Time" type="text" class="form-control" value="" placeholder="Time">
                            </div>
                        </div>
                        <div class="modal-footer mt-3">
                            <input type="submit" value="เพิ่มตารางสอน" class="btn btn-primary profile-button add_button">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>