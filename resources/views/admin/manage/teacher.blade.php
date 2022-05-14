@extends('layouts.default')
@section('title','Admin | Manage')
@section('content')

<div class="height-100 bg-light" style="margin-right: 10px;">
    <div class="container">
        <br>
        <br>
        <h1>จัดการข้อมูลอาจารย์</h1>
           <div class="row d-flex">
            <div class="col-12 mt-2 d-flex justify-content-center">
               <a href="#insertModal"><button class="btn ms-sm-5 mx-2 btn-success" 
                data-bs-toggle="modal" data-bs-target="#insertModal">เพิ่มข้อมูลอาจารย์</button></a> 
           </div>
           <table class="table table-striped shadow-sm text-center mt-3">
            <thead class="table table-dark">
                <tr>
                    <th>รหัสอาจารย์</th>
                    <th>ชื่อ-สกุล</th>
                    <th>สาขา</th>
                    <th>Email</th>
                    <th> </th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @foreach($teachersinfo as $row)
                <tr>
                    <th>{{$row->TeacherID}}</th>
                    <td>{{$row->TeacherName}}</td>
                    <td>{{$row->DepartmentName}}</td>

                    <td>{{$row->Email}}</td>
                    <td><a href="#"><button class="btn ms-sm-5 mx-2 btn-info" data-bs-toggle="modal" data-bs-target="#editModal">แก้ไขข้อมูล</button></a> </td>
                    <td><a href="#"><button class="btn ms-sm-5 mx-2 btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">ลบข้อมูล</button></a> </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
<!--Container Main end-->

<!-- edit Modal -->
<div class="modal fade" id="editModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">แก้ไขข้อมูลนักศึกษา</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button> <!-- close button-->
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12"><label class="labels">Student ID.</label><input type="text" class="form-control" placeholder="id before" value=""></div>
                            <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name before" value=""></div>
                            <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname before"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"><label class="labels">DOB</label><input type="text" class="form-control" placeholder="dob before" value=""></div>
                            <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="ddress before" value=""></div>
                            <div class="col-md-12"><label class="labels">Department</label><input type="text" class="form-control" placeholder="department before" value=""></div>
                            <div class="col-md-12"><label class="labels">Email</label><input type="email" class="form-control" placeholder="email before" value=""></div>
                            <div class="col-md-12"><label class="labels">Phone</label><input type="text" class="form-control" placeholder="phone number before" value=""></div>
                            <div class="col-md-12"><label class="labels">Status</label><input type="text" class="form-control" placeholder="status before" value=""></div>
                            <div class="col-md-12"><label class="labels">Sex</label><input type="text" class="form-control" placeholder="Sex before" value=""></div>
                            <div class="col-md-12"><label class="labels">Advisor</label><input type="text" class="form-control" placeholder="Advisor name before" value=""></div>
                        </div>
                </div>
            </div>
            <div class="modal-footer mt-3">
                <button class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button class="btn btn-success">บันทึกข้อมูล</button>
            </div>
        </div>
    </div>
  </div>

    <!-- insert Modal -->
    <div class="modal fade" id="insertModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">เพิ่มข้อมูลอาจารย์</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button> <!-- close button-->
                </div>
                <form action = "{{route('teacherAdd')}}"  method="POST">
                @csrf
                <div class="modal-body">
                    <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12"><label class="labels">Teacher ID.</label><input type="text" name="TeacherID"class="form-control" placeholder="" value=""></div>
                                <div class="col-md-12"><label class="labels">Name</label><input type="text" name="TeacherName" class="form-control" placeholder="" value=""></div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12"><label class="labels mt-3">Department (required)</label><input class="ml-2" list = "Department" name="DepartmentID" ><datalist id="Department"><option value="101" >CPE<option value="102">ME<option value="111">Maths</datalist></div>
                                <div class="col-md-12"><label class="labels">Email</label><input type="text" name="Email" class="form-control" placeholder="" value=""></div>
                                <div class="col-md-12"><label class="labels">Phone</label><input type="text" name="Phone" class="form-control" placeholder="" value=""></div>                              
                                <div class="col-md-12"><label class="labels">Address</Address></label><input type="text" name="Address" class="form-control" placeholder="" value=""></div>
                                
                            </div>
                    </div>
                </div>
                <div class="modal-footer mt-3">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button class="btn btn-success">บันทึกข้อมูล</button>
                </div></form>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ยืนยันการลบวิชา</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button> <!-- close button-->
                </div>
                <div class="modal-body">
                    คุณต้องการที่จะลบอาจารย์ท่านนี้หรือไม่
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button class="btn btn-danger">ตกลง</button>
                </div>
            </div>
        </div>
    </div>