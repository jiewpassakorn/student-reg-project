@extends('layouts.default')
@section('title','Manage | section')
@section('content')
<link rel="icon" type="image/x-icon" href="/images/kmutt-logo.png">


<div class="height-100 bg-light" style="margin-right: 10px;">
    <div class="container">
    <br>
    <br>
    <h1><i class="fa fa-bars fa-xs"></i> จัดการข้อมูลห้องเรียน</h1>
    <div class="row d-flex">    
        <hr>
        <div class="col-12 mt-2 d-flex justify-content-center">
            <a href="#insertModal"><button class="btn ms-sm-5 mx-2 btn-success" 
            data-bs-toggle="modal" data-bs-target="#insertClassModal">เพิ่มรายละเอียดห้องเรียน</button></a> 
        </div>
        <table class="table table-striped shadow-sm text-center mt-3">
            <thead class="table table-dark">
                <tr>
                    <th>เลขคลาส</th>
                    <th>เลขคอร์ส</th>
                    <th>ชื่อคอร์ส</th>
                    <th>กลุ่ม</th>
                    <th>ภาคการศึกษา</th>
                    <th>จำนวนนักศึกษา</th>
                    <th> </th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @foreach($classinfo as $row)
                <tr>
                    <th>{{$row->ClassID}}</th>
                    <td>{{$row->CourseID}}</td>
                    <td>{{$row->CourseName}}</td>
                    <td>{{$row->Section}}</td>
                    <td>{{$row->Semester}}</td>
                    <td>{{$registrations->where('ClassID',$row->ClassID)->count()}}</td>
                    <td><a href="#"><button class="btn ms-sm-5 mx-2 btn-info" data-bs-toggle="modal" data-bs-target="#editModal">แก้ไขข้อมูล</button></a> </td>
                    <td><a href="#"><button class="btn ms-sm-5 mx-2 btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">ลบข้อมูล</button></a> </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$classinfo->links()}}
    </div>
</div>
</div>
<!--Container Main end-->

    <!-- เพิ่มรายละเอียดคลาส -->
    <div class="modal fade" id="insertClassModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">เพิ่มรายละเอียดคลาส</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button> <!-- close button-->
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 mt-2"><label class="labels">คลาสไอดี</label><input type="text" class="form-control" placeholder="" value=""></div>
                                <div class="col-md-12 mt-2"><label class="labels">คอร์สไอดี</label><input type="text" class="form-control" placeholder="อิงจากตารางคอร์สดีเทล (FK)" value=""></div>
                                <div class="col-md-6 mt-2"><label class="labels">กรุ๊ป</label><input type="text" class="form-control" value="" placeholder=""></div>
                                <div class="col-md-6 mt-2"><label class="labels">ภาคการศึกษา</label><input type="text" class="form-control" placeholder="" value=""></div>
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

    <!-- แก้ไขรายละเอียดคลาส -->
    <div class="modal fade" id="editClassModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">แก้ไขรายละเอียดคลาส</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button> <!-- close button-->
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 mt-2"><label class="labels">คลาสไอดี</label><input type="text" class="form-control" placeholder="คลาสไอดีเดิม" value=""></div>
                                <div class="col-md-12 mt-2"><label class="labels">คอร์สไอดี</label><input type="text" class="form-control" placeholder="แก้ไม่ได้ เป็น(PK) ของตารางคอร์สดีเทล" value="" disabled></div>
                                <div class="col-md-6 mt-2"><label class="labels">กรุ๊ป</label><input type="text" class="form-control" value="" placeholder="กรุ๊ปเดิม"></div>
                                <div class="col-md-6 mt-2"><label class="labels">ภาคการศึกษา</label><input type="text" class="form-control" placeholder="ภาคการศึกษาเดิม" value=""></div>
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

    <!-- ลบคลาส -->
    <div class="modal fade" id="deleteClassModal">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ยืนยันการลบรายละเอียดวิชา</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button> <!-- close button-->
                </div>
                <div class="modal-body">
                    คุณต้องการที่จะลบรายละเอียดวิชานี้หรือไม่
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button class="btn btn-danger">ตกลง</button>
                </div>
            </div>
        </div>
    </div>