@extends('layouts.default')
@section('title','Teacher | report')
@section('content')
<link rel="icon" type="image/x-icon" href="/images/kmutt-logo.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<div class="height-100% " style="margin-right: 10px;">
    <div class="container">
            <div class="row mt-5 p-2">
                <div class="col-sm-12 mt-3 pt-3 justify-content-center">
                    <h2><i class="fa fa-bar-chart"></i> รายงานสถิติ </h2> 
                </div>
            </div>
            <hr>
            {{-- tab header --}}
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                </li>
            </ul>
            {{-- tab content --}}
                <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <table class="table table-striped shadow-sm text-center mt-2">
                        <h5 class="mt-3"><font color="black">ตารางแสดงสถิติของเกรดในแต่ละวิชา</font></h5>
                        <thead class="table table-dark">
                            <tr>
                                <th>รหัสวิชา</th>
                                <th>ชื่อวิชา</th>
                                <th>รหัสคลาส</th>
                                <th>Min</th>
                                <th>Max</th>
                                <th>Mean</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reportinfo as $row)
                            <tr>
                                <th>{{$row->CourseID}}</th>
                                <td>{{$row->CourseName}}</td>
                                <td>{{$row->ClassID}}</td>
                                <td>{{$reportavg->where('ClassID',$row->ClassID)->min('Grade')}}</td>
                                <td>{{$reportavg->where('ClassID',$row->ClassID)->max('Grade')}}</td>
                                <td>{{ROUND($reportavg->where('ClassID',$row->ClassID)->avg('Grade'),2)}}</td>
                            </tr>  
                            @endforeach
                        </tbody>
                    </table> 
                </div>

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <table class="table table-striped shadow-sm text-center mt-2">
                        <h5 class="mt-3"><font color="black">ตารางแสดงเกรดเฉลี่ย</font></h5>
                        <thead class="table table-dark">
                            <tr>
                                <th>ลำดับ</th>
                                <th>รหัสนักศึกษา</th>
                                <th>ชื่อ</th>
                                <th>GPA</th>
                                <th>สถานะ<th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reportstudent as $row)
                            <tr>
                                <th>{{$reportstudent->firstItem()+$loop->index}}</th>
                                <th>{{$row->StudentID}}</th>
                                <td>{{$row->StudentName}}</td>
                                <td>{{ROUND($reportavg->where('StudentID',$row->StudentID)->avg('Grade'),2)}}</td>
                                <td>@if( $reportavg->where('StudentID',$row->StudentID)->avg('Grade') > 2 )
                                    <font color="green">Normal</font>
                                    @else
                                    <font color="red">Probation</font>
                                    @endif
                                </td>                
                            </tr>  
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                
                </div>        
    </div>
</div>