{{-- @extends('layouts.default')
@section('title','Student | index')
@section('content')

@endsection

<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        Accessible only for students
    </div>
</div> --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome, {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            Accessible only for students.
        </div>
    </div>
</x-app-layout>
