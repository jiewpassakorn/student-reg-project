<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\myinfoController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/admin',[AdminController::class,'index'])->name('admin');
Route::get('/about',[AboutController::class,'about'])->name('about');
// Route::get('/admin',[AdminController::class,'index'])->name('admin')->middleware('check');

// For Student
Route::get('/student/login',[StudentController::class,'login'])->name('login');
Route::get('/myinfo',[StudentController::class,'myinfo'])->name('myinfo');
Route::post('/myinfo/add',[myinfoController::class,'store'])->name('adddatatoDB');
Route::get('/welcome',[StudentController::class,'welcome'])->name('first');
Route::get('/register',[StudentController::class,'regis'])->name('regis');
Route::get('/schedule',[StudentController::class,'schedule'])->name('schedule');
Route::get('/grading',[StudentController::class,'grading'])->name('grading');

// For Teacher
Route::get('/teacher/login',[TeacherController::class,'login'])->name('tlog');
Route::get('/teacher/welcome',[TeacherController::class,'welcome'])->name('t.welcome');

 //Department
 Route::get('/department/all',[DepartmentController::class,'index'])->name('department');
 Route::post('/department/add',[DepartmentController::class,'store'])->name('addDepartment');
 Route::get('/department/edit/{id}',[DepartmentController::class,'edit']);
 Route::post('/department/update/{id}',[DepartmentController::class,'update']);