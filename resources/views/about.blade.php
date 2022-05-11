<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
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
          <div> <a href="{{route('home')}}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Information System</span> </a>
            <div class="nav_list">
                <a href="{{route('home')}}" class="nav_link"> <i class="fa-solid fa-house"></i> <span class="nav_name">Homepage</span> </a>
                <a href="{{route('about')}}" class="nav_link active"> <i class="fa fa-users"></i> <span class="nav_name">About us</span> </a>
            </div>
        </div>
        </nav>
    </div>
<br>
<br>

<section class="about-us">
    <h4><i class="fa fa-users" style="margin-right: 20px"></i>Our members</h3>      
    <hr>
    <div class="row">
        <div class="col-md-2">
            <div class="card" style="width: 100%;">
                <img src="assets/img/man-large.jpg" class="card-img-top" alt="...">
                <div class="card-body shadow p-3">
                  <h5 class="card-title">63070501087</h5>
                  <font size = "4"> <b>Ton</b>  </font> <br>
                  <h6>Kanawat Gumkuntee</h6>
                  <li>Project manager</li>
                  <li>Front-End</li>
                </div>
              </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="width: 100%;">
                {{-- <div class="card-header">Stang</div> --}}
                <img src="assets/img/women-large.jpg" class="card-img-top" alt="...">
                <div class="card-body shadow p-3">
                  <h5 class="card-title">63070501090</h5>
                  {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                  <font size = "4"> <b>Stang</b>  </font> <br>
                  <h6>Watcharapong Chuaidue</h6>
                  <li>Back-End</li>
                  <li>Database Builder</li>
                </div>
              </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="width: 100%;">
                {{-- <div class="card-header">Mark</div> --}}
                <img src="assets/img/insta-1.jpg" class="card-img-top" alt="...">
                <div class="card-body shadow p-3">
                  <h5 class="card-title">63070501077</h5>
                  <font size = "4"> <b>Mark</b>  </font> <br>
                  <h6>Suttiphong Panyadee</h6>
                  <li>Front-End</li>
                  <li>Database</li>
                </div>
              </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="width: 100%;">
                <img src="assets/img/insta-3.jpg" class="card-img-top" alt="...">
                <div class="card-body shadow p-3">
                  <h5 class="card-title">63070501048</h5>
                  <font size = "4"> <b>Jiew</b>  </font> <br>
                  <h6>Passakorn Klaikaew</h6>              
                  <li>Back-End</li>
                  <li>Database</li>
                </div>
              </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="width: 100%;">
                <img src="assets/img/insta-2.jpg" class="card-img-top" alt="...">
                <div class="card-body shadow p-3">
                  <h5 class="card-title">63070501028</h5>
                  <font size = "4"> <b>F</b>  </font> <br>
                  <h6>Tittawat Jai-ou</h6>
                  <li>Back-End</li>
                  <li>Database</li>
                </div>
              </div>
        </div>
    </div>   
</section>

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
</body>
</html>