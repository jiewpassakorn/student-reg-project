@extends('layouts.default')
@section('title','Student | Registration')
@section('content') 
    
<!--Container Main start-->

<div class="height-100 bg-light">
    <div class="container">
            <div class="row mt-5 p-2">
                <div class="col-sm-12 mt-3 pt-3">
                    <h4> ลงทะเบียนเรียน </h4></button> 
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Anoucement</h5>
                  <p class="card-text">This is student register beta version.</p>
                </div>
                <div class="card-footer text-muted">
                  2 days remaining
                </div>
              </div>
 
    <!-- table -->
           <!-- Striped  -->
           <br>
        <table class="table table-striped shadow-lg text-center">
            <thead class="table table-dark">
                <tr>
                    <th>ลำดับ</th>
                    <th>รหัสวิชา</th>
                    <th>ชื่อวิชา</th>
                    <th>หน่วยกิต</th>
                    <th>กลุ่ม</th>
                    <th>แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>CPE100</td>
                    <td>Computer xxxxx xxxxx</td>
                    <td>3</td>
                    <td>1</td>
                    <td><a href="" data-bs-toggle="modal" data-bs-target="#deleteModal">ลบ</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>CPE101</td>
                    <td>Computer xxxxx xxxxx</td>
                    <td>3</td>
                    <td><a href="#selectModal" data-bs-toggle="modal" data-bs-target="#selectModal">เลือก</a></td>
                    <td><a href="" data-bs-toggle="modal" data-bs-target="#deleteModal">ลบ</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>CPE102</td>
                    <td>Computer xxxxx xxxxx</td>
                    <td>3</td>
                    <td>3</td>
                    <td><a href="" data-bs-toggle="modal" data-bs-target="#deleteModal">ลบ</a></td>
                </tr>
            </tbody>
        </table>

     <!-- button -->
     <div class="row text-center">
        <div class="col-sm-2">
         <a href="#insertModal"><button id="insertButton" class="btn btn-success mt-2 p-2 px-3" 
            data-bs-toggle="modal" data-bs-target="#insertModal">เพิ่มวิชา</button></a> 
        </div>
        <div class="col-sm-8">
        </div>
        <div class="col-sm-2">
         <a href="#insertModal"><button id="editButton" class="btn  btn-secondary mt-2 p-2 px-3">ยืนยัน</button></a> 
        </div>
     </div>


    </div>
</div>
     <!--Container Main end-->


     <!-- Insert Modal -->
     <div class="modal fade" id="insertModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">เพิ่มวิชา</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button> <!-- close button-->
                </div>
                <div class="modal-body">
                    <div class="row">
                         <div class="col-md-10 d-grid">
                             <div class="search">
                                 <input type="text" class="form-control" placeholder="พิมพ์รายวิชาที่ต้องการค้นหา">
                            </div>
                         </div>
                         <div class="col-md-2 d-grid">
                              <button class="btn btn-primary">ค้นหา</button> 
                         </div>
                    </div>
                    <table class="table table-striped shadow-sm text-center mt-3">
                        <thead class="table table-dark">
                            <tr>
                                <th>เลือก</th>
                                <th>ลำดับ</th>
                                <th>รหัสวิชา</th>
                                <th>ชื่อวิชา</th>
                                <th>หน่วยกิต</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                    <label>
                                    <input type="checkbox" name="" class="form-check-input">
                                    </label>
                                   </div>
                                </td>
                                <td>1</td>
                                <td>CPE100</td>
                                <td>Computer xxxxx xxxxx</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                    <label>
                                    <input type="checkbox" name="" class="form-check-input">
                                    </label>
                                   </div>
                                </td>
                                <td>2</td>
                                <td>CPE101</td>
                                <td>Computer xxxxx xxxxx</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                    <label>
                                    <input type="checkbox" name="" class="form-check-input">
                                    </label>
                                   </div>
                                </td>
                                <td>3</td>
                                <td>CPE102</td>
                                <td>Computer xxxxx xxxxx</td>
                                <td>3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button class="btn btn-success">บันทึกข้อมูล</button>
                </div>
            </div>
        </div>
     </div>

     <!-- Select Modal -->
     <div class="modal fade" id="selectModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">เลือกกลุ่มเรียน</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button> <!-- close button-->
                </div>
                <div class="modal-body">
                    <div class="container bg-light p-1 shadow-sm">
                         <div class="row ms-2">
                             <div class="col-md-6 p-2">
                             <b>รหัสวิชา:</b> GEN xxx
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
                                <td>
                                    <div class="form-check">
                                    <label>
                                    <input type="checkbox" name="" class="form-check-input">
                                    </label>
                                   </div>
                                </td>
                                <td>1</td>
                                <td>50</td>
                                <td>Online</td>
                                <td>จ. 08:00-10:00</td>
                                <td>อ.Dummy Dummy</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                    <label>
                                    <input type="checkbox" name="" class="form-check-input">
                                    </label>
                                   </div>
                                </td>
                                <td>2</td>
                                <td>50</td>
                                <td>Online</td>
                                <td>จ. 08:00-10:00</td>
                                <td>อ.Dummy Dummy</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                    <label>
                                    <input type="checkbox" name="" class="form-check-input">
                                    </label>
                                   </div>
                                </td>
                                <td>3</td>
                                <td>50</td>
                                <td>Online</td>
                                <td>จ. 08:00-10:00</td>
                                <td>อ.Dummy Dummy</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button class="btn btn-success">บันทึกข้อมูล</button>
                </div>
            </div>
        </div>
     </div>

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