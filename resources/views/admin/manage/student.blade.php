@extends('layouts.default')
@section('title','Admin | Manage')
@section('content')


<div class="height-100 bg-light" style="margin-right: 10px;">
    <div class="container">
        <br>
        <br>
        <h1>จัดการข้อมูลนักศึกษา</h1>
        <div class="row d-flex">
            <div class="col-12 mt-2 d-flex justify-content-center">
                <a href="#insertModal"><button class="btn ms-sm-5 mx-2 btn-success" data-bs-toggle="modal" data-bs-target="#insertModal">เพิ่มข้อมูลนักศึกษา</button></a>
            </div>
            <table class="table table-striped shadow-sm text-center mt-3" style="border-radius: 10px">
                <thead class="table table-dark">
                    <tr>
                        <th>รหัสนักศึกษา</th>
                        <th>ชื่อ-สกุล</th>
                        <th>สถานะ</th>
                        <th> </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @php($i=1)
                    @foreach($students as $row)
                    <tr>
                        <th>{{$i++}}</th>
                        <td>{{$row->StudentName}}</td>
                        <td>
                            @if ($row->Status == "Normal")
                            <font color="green">Normal</font>
                            @elseif ($row->Status == "Drop")
                            <font color="red">Drop</font>
                            @elseif ($row->Status == "Retire")
                            <font color="red">Retire</font>
                            @endif
                        </td>

                        <td><a href="#"><button class="btn ms-sm-5 mx-2 btn-info" data-bs-toggle="modal" data-bs-target="#editModal">แก้ไขข้อมูล</button></a> </td>
                        <!-- <td><a href="#"><button class="btn ms-sm-5 mx-2 btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">ลบข้อมูล</button></a> </td> -->
                        <td><a href="{{url('/admin/studentManage/delete/'.$row->StudentID)}}" class="btn ms-sm-5 mx-2 btn-danger">ลบข้อมูล</a></td>

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
                <h5 class="modal-title">เพิ่มข้อมูลนักศึกษา</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button> <!-- close button-->
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <form action="{{route('studentManage_add')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6"><label class="labels">Student ID.</label>
                                @error('studentid')<span class="text-danger py-2">({{$message}})</span>@enderror
                                <input type="text" class="form-control" placeholder="" value="" name="studentid">
                            </div>
                            <div class="col-md-6"><label class="labels">Name</label>
                                @error('StudentName')<span class="text-danger py-2">({{$message}})</span>@enderror
                                <input type="text" name="StudentName" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row">


                            <div class="col-md-5"><label class="labels mt-2">DOB (required)</label>
                                @error('DOB')<span class="text-danger py-2">({{$message}})</span>@enderror
                                <input type="date" name="DOB" class="form-control" placeholder="enter dob" value="">
                            </div>

                            <div class="col-md-7"><label class="labels mt-2">Address</label>
                                @error('Address')<span class="text-danger py-2">({{$message}})</span>@enderror
                                <input type="text" name="Address" class="form-control" value="{{Auth::user()->Address}}">
                            </div>



                            <div class="col-md-4"><label class="labels mt-2">
                                    Department (required)</label>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="DepartmentID"></label>
                                    <select class="form-select" id="DepartmentID" name="DepartmentID">
                                        <option selected value="">Choose...</option>
                                        <option value="101">CPE</option>
                                        <option value="102">ME</option>
                                        <option value="111">Maths</option>
                                    </select>
                                    @error('DepartmentID')<span class="text-danger py-0">({{$message}})</span>@enderror
                                </div>

                            </div>

                            <div class="col-md-8"><label class="labels mt-2">Email</label>
                                @error('Email')<span class="text-danger py-2">({{$message}})</span>@enderror
                                <input type="email" name="Email" class="form-control" value="">
                            </div>

                            <div class="col-md-4"><label class="labels mt-0">Phone (required)</label>

                                <input type="text" name="Phone" class="form-control" placeholder="enter phone number" value="">
                                @error('Phone')<span class="text-danger py-0">({{$message}})</span>@enderror
                            </div>


                            <div class="col-md-4"><label class="labels mt-0">
                                    Status (required)</label>
                                <div class="input-group mb-2">
                                    <label class="input-group-text" for="Status"></label>
                                    <select class="form-select" id="Status" name="Status">
                                        <option selected value="">Choose...</option>
                                        <option value="Normal">Normal</option>
                                        <option value="Drop">Drop</option>
                                        <option value="Retire">Retire</option>
                                    </select>
                                    @error('Status')<span class="text-danger py-0">({{$message}})</span>@enderror
                                </div>

                            </div>

                            <div class="col-md-4"><label class="labels mt-0">
                                    Sex </label>
                                @error('Sex')<span class="text-danger py-0">({{$message}})</span>@enderror
                                <div class="input-group mb-4">
                                    <label class="input-group-text" for="Sex"></label>
                                    <select class="form-select" id="Sex" name="Sex">
                                        <option selected value="">Choose...</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="U">Undefined</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12"><label class="labels mt-0">Advisor</label>
                                <input type="text" name="Advisor" class="form-control" placeholder="Advisor name" value="" disabled>
                            </div>
                        </div>
                        <div class="modal-footer mt-3">
                            <input type="submit" value="Save Profile" class="btn btn-primary profile-button">
                        </div>
                    </form>
                </div>
            </div>


            </form>
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
                คุณต้องการที่จะลบรายวิชานี้หรือไม่
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button class="btn btn-danger">ตกลง</button>
            </div>
        </div>
    </div>
</div>