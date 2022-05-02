<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="{{ asset('/css/styleforTest.css')}}"> --}}
    <link rel="stylesheet" href="/css/styleforTest.css">
    {{-- <link rel="stylesheet" href="{{ asset('/css/app.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/b9d264c4ba.js" crossorigin="anonymous"></script>
</head>

<body id="body-pd" class="bg-light">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img">  <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar bg-dark " id="nav-bar">
        <nav class="nav">
            <div> <a href="{{route('first')}}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">จัดการทะเบียนเรียน</span> </a>
                <div class="nav_list"> 
                    <a href="{{url('/')}}" class="nav_link active"> <i class="fa-solid fa-house"></i> <span class="nav_name">หน้าแรก</span> </a> 
                    <a href="myinfo.html" class="nav_link "> <i class="fa-solid fa-address-card"></i> <span class="nav_name">ข้อมูลประวัตินักศึกษา</span> </a> 
                    <a href="regis.html" class="nav_link"> <i class="fa-solid fa-book-open"></i> <span class="nav_name">ลงทะเบียนเรียน</span> </a> 
                    <a href="schedule.html" class="nav_link"> <i class="fa-solid fa-calendar ps-1"></i> <span class="nav_name">ตารางสอน</span> </a> 
                    <a href="grading.html" class="nav_link"> <i class="fa-solid fa-graduation-cap"></i> <span class="nav_name">ผลการเรียน</span> </a> 
                    <a href="{{route('login')}}" class="nav_link pt-4"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Logout</span> </a>
                </div>
            </div> 
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <div class="row m-3 p-3">
           <h1> หน้าแรก </h1>
        </div>
    </div>

   <!-- footer -->
  <footer style="margin-left: -100px;">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark text-white f">
      <div id="fake_footer" class="container d-grid justify-content-center">
         <p>King Mongkut's University of Techonology Thonburi (KMUTT) Student Registration</p> 
      <div>
    </nav>
  </footer>

    <script src='/js/sidebarAppFortest.js'></script>
    {{-- <script src="{{asset('/js/sidebarAppFortest.js')}}"></script> --}}
</body>
</html>