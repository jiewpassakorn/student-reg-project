<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="icon" type="image/x-icon" href="/images/kmutt-logo.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/styleforTest.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/b9d264c4ba.js" crossorigin="anonymous"></script>
    <script src="/js/sidebarAppFortest.js"></script>
</head>

<body id="body-pd" class="bg-light">


    <header class="header shadow-sm" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img">  <img src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt=""> </div>
    </header>
    <div class="l-navbar bg-dark" id="nav-bar">
        <nav class="nav">
            <div> <a href="{{route('home')}}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">จัดการทะเบียนเรียน</span> </a>
                <div class="nav_list"> 
                    <a href="{{route('first')}}" class="nav_link"> <i class="fa-solid fa-house"></i> <span class="nav_name">หน้าแรก</span> </a> 
                    <a href="{{route('myinfo')}}" class="nav_link "> <i class="fa-solid fa-address-card"></i> <span class="nav_name">ข้อมูลประวัตินักศึกษา</span> </a> 
                    <a href="{{route('regis')}}" class="nav_link active"> <i class="fa-solid fa-book-open"></i> <span class="nav_name">ลงทะเบียนเรียน</span> </a> 
                    <a href="{{route('schedule')}}" class="nav_link"> <i class="fa-solid fa-calendar ps-1"></i> <span class="nav_name">ตารางเรียน</span> </a> 
                    <a href="{{route('grading')}}" class="nav_link"> <i class="fa-solid fa-graduation-cap"></i> <span class="nav_name">ผลการเรียน</span> </a> 
                    <a href="{{route('about')}}" class="nav_link" target="_blanK"> <i class="fa fa-users"></i> <span class="nav_name">About us</span> </a>
                    <a href="{{route('login')}}" class="nav_link pt-4"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
                </div>
            </div>
        </nav>
    </div>

    <!--Container Main start-->

<div class="height-100 bg-light">
    <div class="container">
            <div class="row mt-5 p-2">
                <div class="col-sm-12 mt-3 pt-3">
                    <h4> ลงทะเบียนเรียน </h4></button> 
                </div>
            </div>
            <hr>
            <div class="row d-grid justify-content-center">
                 <div class="container mt-3">
                   <div class="col-sm-12 justify-content-around shadow p-4  mb-4 bg-body rounded" >
                        <p>
                            Student info Student info Student info Student infoStudent infoStudent infoStudent infoStudent infoStudent infoStudent infoStudent infoStudent infoStudent infoStudent infoStudent infoStudent infoStudent info
                        </p>
                   </div>
                 </div>
           </div>
 
    <!-- table -->
           <!-- Striped  -->
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
                @php($i=1)
                @foreach($coursedetails as $row)
                <tr>
                    <th>{{$i++}}</th>
                    <td>{{$row->CourseID}}</td>
                    <td>{{$row->CourseName}}</td>
                    <td>{{$row->Credit}}</td>
                    <td><a href="#selectModal{{$row->CourseID}}" data-bs-toggle="modal" data-bs-target="#selectModal">เลือก</a></td>
                    <td><a href="" data-bs-toggle="modal" data-bs-target="#deleteModal">ลบ</a></td>
                </tr>
                @endforeach
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

        <br>
        <br>
        <br>
        <br>
       <!-- footer -->
       <footer style="margin-left: -100px;">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark text-white fixed-bottom">
          <div id="fake_footer" class="container d-grid justify-content-center">
             <p>King Mongkut's University of Techonology Thonburi (KMUTT) Student Registration</p> 
          <div>
        </nav>
       </footer>

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
                                <input type="text" class="form-control" name="search" placeholder="พิมพ์รายวิชาที่ต้องการค้นหา">
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
                            @php($i=1)
                            @foreach($coursedetails as $row)
                            <tr>
                                <td>
                                    <div class="form-check">
                                    <label>
                                    <input type="checkbox" name="" class="form-check-input">
                                    </label>
                                </div>
                                </td>
                                <th>{{$i++}}</th>
                                <td>{{$row->CourseID}}</td>
                                <td>{{$row->CourseName}}</td>
                                <td>{{$row->Credit}}</td>
                            </tr>
                             @endforeach
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
    <form action="" method="">
        <div class="modal fade" id="selectModal"} tabindex="-1" role="dialog">
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
                                        <td>
                                            <div class="form-check">
                                            <label>
                                            <input type="checkbox" name="" class="form-check-input">
                                            </label>
                                        </div>
                                        </td>              
                                        <td>{{$row->Section}}</td>
                                        <td>30</td>
                                        <td>{{$row->ClassID}}</td>
                                        <td>{{$row->schedules}}</td>
                                        <td>dummy teacher</td>
                                    </tr>
                                    @endforeach
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

</body>
</html>