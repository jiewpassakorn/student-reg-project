@extends('layouts.default')
@section('title','Welcome')
@section('content')

<div class="height-100 bg-light" style="margin-right: 10px;">
    <div class="container">
            <div class="row mt-5 p-2">
                <div class="col-sm-12 mt-3 pt-3 justify-content-center">
                    <h2> Welcome, {{Auth::user()->name}} </h2> 
                </div>
            </div>
            <hr>
            {{-- <div class="row d-grid justify-content-center">
                 <div class="container mt-3">
                   <div class="col-sm-12 justify-content-around shadow p-4  mb-4 bg-body rounded" >
                        <p>ระบบลงทะเบียนเรียน version ทดสอบ
                        </p>
                   </div>
                 </div>
           </div> --}}
           <div class="card">
            <div class="card-header">
              Update
            </div>
            <div class="card-body">
              <h5 class="card-title">Anoucement</h5>
              <p class="card-text">This is student register beta version.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-muted">
              2 days remaining
            </div>
          </div>
    </div>
  </div>