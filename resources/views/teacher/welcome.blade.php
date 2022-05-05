<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
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
                    <a href="{{route('first')}}" class="nav_link active "> <i class="fa-solid fa-house"></i> <span class="nav_name">หน้าแรก</span> </a> 
                    <a href="{{route('myinfo')}}" class="nav_link "> <i class="fa-solid fa-address-card"></i> <span class="nav_name">ข้อมูลประวัตินักศึกษา</span> </a> 
                    <a href="{{route('regis')}}" class="nav_link"> <i class="fa-solid fa-book-open"></i> <span class="nav_name">ลงทะเบียนเรียน</span> </a> 
                    <a href="{{route('schedule')}}" class="nav_link"> <i class="fa-solid fa-calendar ps-1"></i> <span class="nav_name">ตารางเรียน</span> </a> 
                    <a href="{{route('grading')}}" class="nav_link"> <i class="fa-solid fa-graduation-cap"></i> <span class="nav_name">ผลการเรียน</span> </a> 
                    <a href="{{route('tlog')}}" class="nav_link pt-4"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
                    <a href="{{route('about')}}" class="nav_link" target="_blank"> <i class="fa fa-users"></i> <span class="nav_name">About us</span> </a>
                </div>
            </div>
        </nav>
    </div>
    

    <!--Container Main start-->
<div class="height-100 bg-light" style="margin-right: 10px;">
    <div class="container">
            <div class="row mt-5 p-2">
                <div class="col-sm-12 mt-3 pt-3 justify-content-center">
                    <h4> สวัสดีครับคุณครู </h4></button> 
                </div>
            </div>
            <hr>
            <div class="row d-grid justify-content-center">
                 <div class="container mt-3">
                   <div class="col-sm-12 justify-content-around shadow p-4  mb-4 bg-body rounded" >
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                             Accusantium unde excepturi mollitia suscipit ipsam id debitis ab voluptates, 
                             animi aut in libero. Laborum aliquam exercitationem deserunt corporis aliquid,
                              quam odit!
                        </p>
                   </div>
                 </div>
           </div>
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

     
</body>
</html>