@extends('layouts.default')
@section('title','Teacher | report')
@section('content')

<div class="height-100 bg-light" style="margin-right: 10px;">
    <div class="container">
            <div class="row mt-5 p-2">
                <div class="col-sm-12 mt-3 pt-3 justify-content-center">
                    <h2><i class="fa fa-bar-chart"></i> รายงานสถิติ </h2> 
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-header">
                    Update
                </div>
            <div class="card-body">
                <h5 class="card-title">Anoucement</h5>
                <p class="card-text">This is student register beta version.</p>
                
                @if (auth()->user()->role_id == 2) 
                    <a href="{{route('myinfo')}}" class="btn btn-primary mt-2">Edit information</a>
                @endif
            
            </div>
            <div class="card-footer text-muted">
                2 days remaining
            </div>
        </div>
    </div>
</div>