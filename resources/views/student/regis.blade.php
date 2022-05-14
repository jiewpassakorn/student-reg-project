@extends('layouts.default')
@section('title','Student | Registration')
@section('content')

<!--Container Main start-->
<div class="height-100 bg-light">
    <div class="container">
        <div class="row mt-5 p-2">
            <div class="col-sm-12 mt-3 pt-3">
                <h4><i class="fa-solid fa-book-open fa-xs"></i> ลงทะเบียนเรียน </h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="container mt-3">
                <div class="col-sm-12 justify-content-around shadow p-4 mb-4 bg-body rounded">
                    <div class="row ms-2">
                        <div class="col-md-6 p-2">
                            <b>รหัสนักศึกษา:</b> {{$studentsinfo->StudentID}}
                        </div>
                        <div class="col-md-6 p-2">
                            <b>ชื่อ-นามสกุล:</b> {{$studentsinfo->StudentName}}
                        </div>
                        <div class="col-md-6 p-2">
                            <b>E-mail:</b> {{$studentsinfo->Email}}
                        </div>
                        <div class="col-md-6 p-2">
                            <b>ภาควิชา:</b> {{$studentsinfo->DepartmentName}}
                        </div>
                        <div class="col-md-12 p-2">
                            <b>สถานะ:</b>
                            @if ($studentsinfo->status == "Normal")
                                <font color="green">Normal</font>
                            @elseif ($studentsinfo->status == "Drop")
                                <font color="red">Drop</font>
                            @elseif ($studentsinfo->status == "Retire")
                                <font color="red">Retire</font>
                            @endif
                        </div>
                    </div>


                </div>
            </div>
            
            {{-- alert message --}}
            @if(Session::has('success'))
                <div class="d-inline-flex">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        {{Session::get('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>                  
                </div> 
            @elseif(Session::has('wait'))
                <div class="d-inline-flex">
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                        {{Session::get('wait')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @elseif(Session::has('delete'))      
                <div class="d-inline-flex">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        {{Session::get('delete')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif

            <!-- table -->
            <div class="container-fluid ">
                <table class="table table-striped shadow-lg text-center ">
                    <thead class="table table-dark ">
                        <th>ลำดับ</th>
                        <th>รหัสวิชา</th>
                        <th>ชื่อวิชา</th>
                        <th>หน่วยกิต</th>
                        <th>กลุ่ม</th>
                        <th>แก้ไข</th>
                        <th>สถานะ</th>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach($registrationsinfo as $row)
                        <tr>
                            <th>{{$i++}}</th>
                            <td>{{$row->CourseID}}</td>
                            <td>{{$row->CourseName}}</td>
                            <td>{{$row->Credit}}</td>
                            <td>{{$row->Section}}</td>
                            <form action="{{route('student.destroy', $row->ClassID)}}" method="post">
                                @csrf
                                @method('PUT')
                                <td><a href="{{url('/service/delete/'.$row->ClassID)}}" class="btn btn-warning btn-sm">ลบ</a></td>
                            </form>
                            <td>
                                @if ($row->RegStatus=="Wait")
                                    <font color="red">รอยืนยัน</font>
                                @elseif ($row->RegStatus=="Ready")
                                    <font color="green">ยืนยัน</font>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="text-end">
                    <font size = "4">จำนวนวิชาที่ลงทะเบียน <span>{{count($registrations)}}</span> วิชา</font>
                    <font size = "4">หน่วยกิตทั้งหมด <span>{{$credit}}</span> หน่วยกิต</font>
                </div>
                <br>
                <!-- button -->
                <div class="row text-center">
                    <div class="col-sm-2">
                        <a href="#insertModal"><button id="insertButton" class="btn btn-success mt-2 p-2 px-3" data-bs-toggle="modal" data-bs-target="#insertModal">เลือกวิชา</button></a>
                    </div>
                    <div class="col-sm-8">
                    </div>
                    
                    <div class="col-sm-2"><form action="{{route('submit')}}" method="post"> @csrf
                        <a href="#insertModal"><button id="editButton" class="btn  btn-secondary mt-2 p-2 px-3">ยืนยัน</button></a>
                    </form></div>
                
                </div>

            </div>


        </div>
    </div>
<!--Container Main end-->


    <!-- Insert Modal -->
    <div class="modal fade" id="insertModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">เลือกวิชา</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button> <!-- close button-->
                </div>
                <div class="modal-body">
                    <table class="table table-striped shadow-sm text-center mt-3">
                        <thead class="table table-dark">
                            <tr>
                                <th>เลือก</th>
                                <th>ลำดับ</th>
                                <th>รหัสวิชา</th>
                                <th>ชื่อวิชา</th>
                                <th>หน่วยกิต</th>
                                <th>กลุ่ม</th>
                                <th>ห้องเรียน</th>
                                <th>เวลาเรียน</th>
                                <th>อาจารย์</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="{{route('addRegistration')}}" method="POST">
                                @csrf
                                @php($i=1)
                                @foreach($coursejoin as $row)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ClassID" value="{{$row->ClassID}}">
                                            <label class="form-check-label" for="ClassID">
                                            </label>
                                        </div>
                                    </td>
                                    <th>{{$i++}}</th>
                                    <td>{{$row->CourseID}}</td>
                                    <td>{{$row->CourseName}}</td>
                                    <td>{{$row->Credit}}</td>
                                    <td>{{$row->Section}}</td>
                                    <td>{{$row->Room}}</td>
                                    <td>{{$row->Weekday}}. {{$row->Time}}</td>
                                    <td>{{$row->TeacherName}}</td>
                                </tr>
                                @endforeach
                                <button type="submit" class="btn btn btn-success btn-sm" id="waitButton">เลือก</button>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<!-- Select Modal -->
<form action="" method="">
    <div class="modal fade" id="selectModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">เลือกกลุ่มเรียน</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button> <!-- close button-->
                </div>
                <div class="modal-body">
                    <div class="container bg-light p-1 shadow-sm">
                        <div class="row ms-2">
                            <div class="col-md-6 p-2">
                                <b>รหัสวิชา:</b> {{$row->CourseID}}
                            </div>
                            <div class="col-md-6 p-2">
                                <b>หน่วยกิต: 3</b>
                            </div>
                            <div class="col-md-8 p-2">
                                <b>ชื่อวิชา:</b> GEN คนดี ร่วมสร้างความดี
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped shadow-sm text-center mt-3">
                        <thead class="table table-dark">
                            <tr>
                                <th>เลือก</th>
                                <th>กลุ่ม</th>
                                <th>จำนวนคงเหลือ</th>
                                <th>ห้องเรียน</th>
                                <th>เวลาเรียน</th>
                                <th>อาจารย์</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($classdetails as $row)
                            <tr>
                                <td><button type="button" class="btn btn-outline-dark btn-sm">เลือก</button></td>
                            </tr>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ยืนยันการลบวิชา</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button> <!-- close button-->
            </div>
            <div class="modal-body">
                คุณต้องการที่จะลบรายวิชานี้หรือไม่
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button class="btn btn-danger">ตกลง</button>
            </div>
        </div>
    </div>
</div>

