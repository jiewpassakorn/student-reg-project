@extends('layouts.default')
@section('title','Admin | dashboard')
@section('content')
<link rel="icon" type="image/x-icon" href="/images/kmutt-logo.png">

<div class="height-100 bg-light" style="margin-right: 10px;">
    <div class="container">
        <br>
        <br>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="fa fa-tachometer fa-sm"></i> Dashboard, {{Auth::user()->name}}

            <b class="float-end">จำนวนผู้ใช้ระบบ <span>{{count($users)}}</span> คน</b>
        </h2>

        <hr>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="container">
                        <div class="row">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">ลำดับ</th>
                                    <th scope="col">ชื่อ</th>
                                    <th scope="col">อีเมล</th>
                                    <th scope="col">เข้าสู่ระบบ</th>
                                    {{-- <th scope="col">เริ่มใช้งานระบบ</th> --}}
                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1
                                    @endphp
                                    @foreach ($users as $row)    
                                    <tr>
                                        <th>{{$i++}}</th>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->created_at}}</td>
                                        {{-- <td>{{$row->created_at->diffForHumans()}}</td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   
        
