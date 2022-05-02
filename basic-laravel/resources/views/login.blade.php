<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#C7C7C7;">

    <div class="container">
        <div class="row" style="margin-top: 15%; height: 450px;">
            <div class="col-sm-2"></div>
            <!-- Box Left -->
            <div class="col-sm-4  text-center" style="background-color: #E64011;">
                <div class="image"><img src="images/white.png" alt="" width="200px" height="230px" style="margin-top: 40px;"></div>
                <div class="text" style="color: aliceblue;"><h2>มหาวิทยาลัยเทคโนโลยี</h2><h2>พระจอมเกล้าธนบุรี</h2></div>
            </div>
             <!-- Box Right -->
            <div class="col-sm-4 p-5" style="background-color: #ffffff;">
                <div class="loginheader mb-4 text-center" style="color: #E64011;"><h1>Student Registration</h1></div>
                <label for="password"> ชื่อผู้ใช้ (รหัสนักศึกษา)</label> 
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            </svg>
                        </span>
                    </div>
                    <input type="text" placeholder="63xxxxxxxxx" class="form-control">
                </div>
                <label for="password"> รหัสผ่าน</label> 
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                            </svg>
                        </span>
                    </div>
                    <input type="password" placeholder="ระบุรหัสผ่าน" class="form-control">
                </div>
                <!-- login button -->
                <div class="input-group mb-3">
                    <div class="d-grid gap-2 col-12 mx-auto">
                        {{-- <input type="submit" name="" id="" value="เข้าสู่ระบบ" class="btn btn-warning"
                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="13:00 - 19:00"> --}}
                        <a href="{{route('first')}}" class="btn btn-warning">เข้าสู่ระบบ</a>
                    </div> 
                </div>
                <div class="d-grid gap-2 col-3 mx-auto">
                       <p class="fs-6"><a href="" class="link-dark" data-bs-target="#modalPassword" data-bs-toggle="modal" >ลืมรหัสผ่าน</a></p>
                </div>
                <div class="col-sm-2"></div>
            </div>        
        </div>
    </div>

      <!-- Navbar Toggle -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-bottom">
        <!-- Content -->
        <div class="container">
            <!-- Brand -->
            <a href="/about">About</a>
            <div class="navbar-brand d-grid gap-2 col-6.5 mx-auto">
                <p>King Mongkut's University of Techonology Thonburi (KMUTT) Student Registration</p>
            </div>
        </div>
    </nav>

<!-- Modal -->
<div class="modal fade" id="modalPassword">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ลืมรหัสผ่าน</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                 <form action="">
                     <div class="form-group">
                         <label for="">อีเมล</label>
                         <input class="form-control" type="email" placeholder="ป้อนอีเมลของคุณ">
                     </div>
                     <div class="form-group">
                        <label for="">รหัสนักศึกษา</label>
                        <input class="form-control" type="text" placeholder="63xxxxxxxxx">
                    </div>
                    <div class="form-group">
                        <label for="">รหัสประจำตัวประชาชน</label>
                        <input class="form-control" type="text" placeholder="xxxx.xxx@mail.kmutt.ac.th">
                    </div>

                 </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button class="btn btn-success">ส่งข้อมูล</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>