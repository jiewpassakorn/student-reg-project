@extends('layouts.default')
@section('title','Manage | schedule')
@section('content')
<link rel="icon" type="image/x-icon" href="/images/kmutt-logo.png">

<br>
<br>

<div class="container mr-3">
    <a class="btn btn-secondary" href="{{route('scheduleManage')}}">กลับ</a>
</div>
<div class="container rounded bg-white mt-2 mb-5 shadow-lg">
    <div class="pt-3">
        <h2>แบบฟอร์มแก้ไขข้อมูล</h2>
    </div>
    <hr>

    <form action="{{url('/scheduleManage/update/'.$schedules->ScheduleID)}}" method="POST">
        @csrf


        <div class="col-md-12 mt-2"><label class="labels">รหัสตารางสอน</label>
                            @error('ScheduleID')<span class="text-danger py-0">({{$message}})</span>@enderror
                            <input name="ScheduleID" type="text" class="form-control" placeholder="ScheduleID" value="{{$schedules->ScheduleID}}">
                        </div>




                        <div class="row">
                            <div class="col-md-12 mt-2"><label class="labels">อาจารย์ผู้สอน</label>

                                @error('TeacherIDdif')<span class="text-danger py-0">({{$message}})</span>@enderror

                                <select name="TeacherIDdif" class="form-select">
                                    <option value="{{$schedules->TeacherIDdif }}" selected>{{$schedules->TeacherIDdif }}</option>
                                    @foreach($teachers as $row)
                                    <option value="{{$row->TeacherID}}">{{$row->TeacherID}} : {{$row->TeacherName}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12 mt-2"><label class="labels">รหัสคลาส</label>
                                @error('ClassID')<span class="text-danger py-0">({{$message}})</span>@enderror
                                <input name="ClassID" type="text" class="form-control" placeholder="ClassID" value="{{$schedules->ClassID}}">
                            </div>

                            <div class="col-md-4 mt-2"><label class="labels">ห้องเรียน</label>
                                @error('Room')<span class="text-danger py-0">({{$message}})</span>@enderror
                                <input name="Room" type="text" class="form-control" placeholder="Room" value="{{$schedules->Room}}">
                            </div>

                            <div class="col-md-4 mt-2"><label class="labels">วัน</label>
                                @error('Weekday')<span class="text-danger py-0">({{$message}})</span>@enderror
                                <select name="Weekday" class="form-select">
                                    <option value="{{$schedules->Weekday}}" selected>{{$schedules->Weekday}}</option>
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
                                <input name="Time" type="text" class="form-control" value="{{$schedules->Time}}" placeholder="Time">
                            </div>
                        </div>
                        <div class="modal-footer mt-3">
                            <input type="submit" value="Save Profile" class="btn btn-primary profile-button add_button">
                        </div>


    </form>
</div>