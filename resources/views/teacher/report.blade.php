@extends('layouts.default')
@section('title','Teacher | report')
@section('content')
<link rel="icon" type="image/x-icon" href="/images/kmutt-logo.png">


<div class="height-100 bg-light" style="margin-right: 10px;">
    <div class="container">
            <div class="row mt-5 p-2">
                <div class="col-sm-12 mt-3 pt-3 justify-content-center">
                    <h2><i class="fa fa-bar-chart"></i> รายงานสถิติ </h2> 
                </div>
            </div>
            <hr>
            
            <table class="table table-striped shadow-sm text-center mt-2">
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
    </div>
</div>