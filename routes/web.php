<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
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
    return view('welcome');
})->name('home');

Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/member',[MemberController::class,'index'])->name('mem');
Route::get('/admin',[AdminController::class,'index'])->name('admin')->middleware('check');
Route::get('/login',[AboutController::class,'login'])->name('login');

Route::get('/firstpage',[AboutController::class,'first'])->name('first');
