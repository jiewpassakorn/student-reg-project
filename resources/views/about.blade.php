<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome | About us</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="/images/kmutt-logo.png">

</head>

<style>
    body {
        background-image: url('assets/img/bg-sparkle.jpg');
        /* background-size: 100% */
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;;
    }

</style>

<body>
    <nav class="navbar navbar-dark fixed-top" style="background-color: #1b1c1d;">
        <div class="container-fluid"> 
            <a class="navbar-brand" href="{{route('home')}}" ><img src="/images/kmutt-logo-2.png" alt="" width="60" height="60" class="d-inline-block align-text-center">KMUTT Student Information System</a>
            <div class="d-flex">
                @if (Route::has('login'))
                    <div class="hidden right-0 sm:block">
                    @auth
                    <a class="btn btn-light" href="{{ route('first') }}"><i class="fa fa-user"></i> Registration System</a>
                    <a class="btn btn-light" href="{{ route('home') }}"><i class="fa fa-user"></i> {{Auth::user()->name}}</a>
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
<section id="slider" class="pt-5">
<div class="container">
    <br><br><br>
    <h1 class="text-center"><b>Our Team</b></h1>
	<div class="slider">
		<div class="owl-carousel">
			<div class="slider-card">
				<div class="d-flex justify-content-center align-items-center mb-4">
					<img src="images/slide-1.jpg" alt="" >
				</div>
				<h5 class="mb-0 text-center"><b>CPE231 Final project</b></h5>
				<p class="text-center p-4">
                    This is CPE231 Final Project is about building wep application with database. Our team choose topic about student registration system.
                </p>
			</div>

			<div class="slider-card">
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <img src="assets/img/FF1.jpg" class="card-img-top" alt="...">
                </div>
                <div class="container">
                    <h5><b>63070501028</b></h5>
                    <font size = "4"> <b>F</b>  </font> <br>
                    <h6>Tittawat Jai-ou</h6>
                    <li>Back-End</li>
                    <li>Database</li>
                    <br>
                </div>
			</div>

			<div class="slider-card">
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <img src="assets/img/stang.jpg" class="card-img-top" alt="...">
                </div>
                <div class="container">
                    <h5><b>63070501090</b></h5>
                    <font size = "4"> <b>Stang</b>  </font> <br>
                    <h6>Watcharapong Chuaidue</h6>
                    <li>Back-End</li>
                    <li>Database Builder</li>
                    <br>
                </div>
			</div>

			<div class="slider-card">
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <img src="assets/img/mark.jpg" class="card-img-top" alt="...">
                </div>
                <div class="container">
                    <h5><b>63070501077</b></h5>
                    <font size = "4"> <b>Mark</b>  </font> <br>
                    <h6>Suttiphong Panyadee</h6>
                    <li>Front-End</li>
                    <li>Database</li>
                    <br>
                </div>
			</div>

			<div class="slider-card">
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <img src="assets/img/jiew3.jpg" class="card-img-top" alt="...">
                </div>
                <div class="container">
                    <h5><b>63070501048</b></h5>
                    <font size = "4"> <b>Jiew</b>  </font> <br>
                    <h6>Passakorn Klaikaew</h6>              
                    <li>Back-End</li>
                    <li>Database</li>
                    <br>
                </div>
			</div>

            <div class="slider-card">
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <img src="assets/img/Ton.jpg" alt="...">
                </div>
                <div class="container">
                    <h5><b>63070501087</b></h5>
                    <font size = "4"> <b>Ton</b></font>
                    <h6 class>Kanawat Gumkuntee</h6>
                    <li>Project manager</li>
                    <li>Front-End</li>
                    <br>
                </div>
            </div>

		</div>
	</div>
</div>
</section>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/script.js"></script>

    <!-- footer -->
    <footer style="margin-left: -100px;">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark text-white fixed-bottom">
          <div id="fake_footer" class="container d-grid justify-content-center">
            <p>King Mongkut's University of Techonology Thonburi (KMUTT) Student Registration System</p>
          <div>
        </nav>
      </footer>
</body>
</html>
