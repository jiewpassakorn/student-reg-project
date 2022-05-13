<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/images/kmutt-logo.png">

    
    <title>@yield('title')</title>

    {{-- styles --}}
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styleforTest.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    {{-- script --}}
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b9d264c4ba.js" crossorigin="anonymous"></script>
    <script src="/js/sidebarAppFortest.js"></script>
</head>


<body id="body-pd" class="bg-light">

    {{-- header --}}
    <header class="header shadow-sm" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        
        {{-- <div class="header_img">  <img src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt=""> </div> --}}

        <!-- Dropdown button -->
        <div class="dropdown" style="margin-left: 80%">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-offset="5,10" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <div class="block px-4 py-2 text-sm text-gray-400">
                    {{ __('Manage Account') }}
                </div>
                
                @if (auth()->user()->role_id == 1)
                    <li><a class="dropdown-item px-4 py-2" href="{{ route('profile.show') }}">Profile</a></li>
                    {{-- <li><hr class="dropdown-divider"></li> --}}
                @endif
               
               <!-- Authentication -->
               <li><form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <a class="dropdown-item px-4 py-2" href="{{ route('logout') }}"
                             @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </a>
                </form></li>
            </ul>
        </div>
        
    </header>

    {{-- sidebar --}}
    <div class="l-navbar bg-dark" id="nav-bar">
        <nav class="nav">
            <div> <p class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">จัดการทะเบียนเรียน</span> </p>
                <div class="nav_list"> 
                    
                    {{-- Menu defaults --}}
                    <a href="{{route('first')}}" class="nav_link {{ Request::routeis('first') ? 'active' : '' }}"> <i class="fa-solid fa-house"></i> <span class="nav_name">หน้าแรก</span> </a> 

                    {{-- Menu for admin --}}
                    @if (auth()->user()->role_id == 1)
                    <a href="{{route('studentManage')}}" class="nav_link {{ Request::routeis('studentManage') ? 'active' : '' }}"> <i class="fa fa-address-card"></i> <span class="nav_name">จัดการข้อมูลนักศึกษา</span> </a>
                    <a href="{{route('teacherManage')}}" class="nav_link {{ Request::routeis('teacherManage') ? 'active' : '' }}"> <i class="fa fa-address-book"></i> <span class="nav_name">จัดการข้อมูลอาจารย์</span> </a>
                    <a href="{{route('courseManage')}}" class="nav_link {{ Request::routeis('courseManage') ? 'active' : '' }}"> <i class="fa fa-book"></i> <span class="nav_name">จัดการข้อมูลรายวิชา</span> </a>
                    {{-- <a href="{{route('dashboard')}}" class="nav_link {{ Request::routeis('dashboard') ? 'active' : '' }}"> <i class="fa fa-tachometer"></i> <span class="nav_name">Dashboard</span> </a> --}}
                    <a href="{{route('admin.dashboard')}}" class="nav_link {{ Request::routeis('admin.dashboard') ? 'active' : '' }}"> <i class="fa fa-tachometer"></i> <span class="nav_name">Dashboard</span> </a>
                    @endif

                    {{-- Menu for student --}}
                    @if (auth()->user()->role_id == 2)    
                        <a href="{{route('myinfo')}}" class="nav_link {{ Request::routeis('myinfo') ? 'active' : '' }}"> <i class="fa-solid fa-address-card"></i> <span class="nav_name">ข้อมูลประวัตินักศึกษา</span> </a> 
                        <a href="{{route('regis')}}" class="nav_link {{ Request::routeis('regis') ? 'active' : '' }}"> <i class="fa-solid fa-book-open"></i> <span class="nav_name">ลงทะเบียนเรียน</span> </a> 
                        <a href="{{route('schedule')}}" class="nav_link {{ Request::routeis('schedule') ? 'active' : '' }}"> <i class="fa-solid fa-calendar ps-1"></i> <span class="nav_name">ตารางเรียน</span> </a> 
                        <a href="{{route('grading')}}" class="nav_link {{ Request::routeis('grading') ? 'active' : '' }}"> <i class="fa-solid fa-graduation-cap"></i> <span class="nav_name">ผลการเรียน</span> </a> 
                    @endif
                    {{-- Menu for teacher --}}                    
                    @if (auth()->user()->role_id == 3)
                        <a href="{{route('courseManage')}}" class="nav_link {{ Request::routeis('courseManage') ? 'active' : '' }}"> <i class="fa fa-book"></i> <span class="nav_name">จัดการข้อมูลรายวิชา</span> </a>
                        <a href="#" class="nav_link"> <i class="fa fa-book"></i> <span class="nav_name">รายงานสถิติ</span> </a>
                    @endif
                    
                </div>
            </div>
        </nav>
    </div>

    <br>
    <br>

    {{-- footer --}}
    {{-- <footer style="margin-left: -100px;">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark text-white fixed-bottom">
          <div id="fake_footer" class="container d-grid justify-content-center">
             <p>King Mongkut's University of Techonology Thonburi (KMUTT) Student Registration</p> 
          <div>
        </nav>
    </footer> --}}

    <footer class=" position-relative">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div >
                            <a href="#">CPE231 Final Project</a>
                        </div>
                        <ul>
                            <li>Address: KMUTT Bangkok, Thailand</li>
                            <li>Department: Computer Engineering</li>
                            <li>Email: xxxxxxxx@mail.kmutt.ac.th</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5 style="color: #FA4616">Information</h5>
                        <ul>
                            <li><a href={{route('about')}}>About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest course and anoucement.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail" />
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>     
    </footer>
    
</body>


</html>
