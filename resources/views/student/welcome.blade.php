@extends('layouts.default')
@section('title','Welcome')
@section('content')

<div class="height-100 bg-light" style="margin-right: 10px;">
    <div class="container">
            <div class="row mt-5 p-2">
                <div class="col-sm-12 mt-3 pt-3 justify-content-center">
                    <h4> หน้าแรก Welcome, {{Auth::user()->name}} </h4>
                </div>
            </div>
            <hr>
            <div class="row d-grid justify-content-center">
                 <div class="container mt-3">
                   <div class="col-sm-12 justify-content-around shadow p-4  mb-4 bg-body rounded" >
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                             Accusantium unde excepturi mollitia suscipit ipsam id debitis ab voluptates, 
                             animi aut in libero. Laborum aliquam exercitationem deserunt corporis aliquid,
                              quam odit!
                        </p>
                   </div>
                 </div>
           </div>
           
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Welcome, {{Auth::user()->name}}
                </h2>
            </x-slot>
        
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