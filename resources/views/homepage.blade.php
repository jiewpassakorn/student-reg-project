<!DOCTYPE html>
<html>
<title>Home</title>
<link rel="icon" type="image/x-icon" href="/images/kmutt-logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<!-- Css Styles -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/themify-icons.css" type="text/css">
<link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!-- Js Plugins -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.zoom.min.js"></script>
<script src="assets/js/jquery.dd.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>


<body>
<header class="header-section">
    <nav class="navbar navbar-dark sticky-top" style="background-color: #1b1c1d;">
        <div class="container-fluid"> 
            <a class="navbar-brand" href="" ><img src="/images/kmutt-logo-2.png" alt="" width="60" height="70" class="d-inline-block align-text-center">KMUTT Student Information System</a>
            <div class="d-flex">
                @if (Route::has('login'))
                    <div class="hidden right-0 sm:block">
                    @auth
                    <a class="btn btn-light" href="{{ route('first') }}"><i class="fa fa-user"></i> {{Auth::user()->name}}</a>
                    @else
                        <a class="btn btn-light" href="{{route('login')}}"><i class="fa fa-sign-in fa-lg"></i> Login</a>

                        @if (Route::has('register'))
                            <a class="btn btn-light" href="{{route('register')}}"><i class="fa fa-id-card"></i> Register</a>
                        @endif
                    @endauth
                    </div>
                @endif
            </div>
        </div>                        
    </nav> 
    <div class="nav-item">
        <div class="container-fluid">
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Courses</a>
                        <ul class="dropdown">
                            <li><a href="#">Computer Engineering</a></li>
                            <li><a href="#">Mechanical Engineering</a></li>
                            <li><a href="#">Chemical Engineering</a></li>
                        </ul>
                    </li>
                    <li><a href={{route('about')}}>About</a></li>
                    <li><a href={{route('first')}}>Registration System</a></li>
                    {{-- <li><a href="{{route('login')}}">Login</a>
                        <ul class="dropdown">
                            <li><a href={{route('login')}}>Login</a></li>
                            <li><a href={{route('register')}}>register</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </nav>
        </div>
    </div>
</header>

<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="assets/img/jiew2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>warning!</span>
                        <h1 style="color:white">KEEP GOING.</h1>
                        <p>สู้ต่อไปอย่ายอมแพ้</p>
                        <a href="#" class="primary-btn">Coding Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>present<span>16/5</span></h2>
                </div>
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="assets/img/hero-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>warning!</span>
                        <h1>HURRY UP!!</h1>
                        <p>Due date: 16/5/65</p>
                        <a href="#" class="primary-btn">Coding Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>present<span>16/5</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Task</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="assets/img/latest-1.jpg" alt="" />
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                May 5, 2022
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="#">
                            <h4>Front-End</h4>
                        </a>
                        <p>Design web UI and template of each role such as students, teacher and staff. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="assets/img/latest-2.jpg" alt="" />
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                May 9, 2022
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="#">
                            <h4>Back-End</h4>
                        </a>
                        <p>Create database and connect web and database. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="assets/img/latest-3.jpg" alt="" />
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                May 16, 2022
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="#">
                            <h4>Project presentation</h4></h4>
                        </a>
                        <p>สู้ๆงับ ใกล้เสร็จแล้ว อัพเดทงานเรื่อยๆ </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-1.png" alt="" />
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-2.png" alt="" />
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-2.png" alt="" />
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-2.png" alt="" />
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-2.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
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
                    <h5>Information</h5>
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