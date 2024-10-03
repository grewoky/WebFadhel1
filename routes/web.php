<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\test1\Testcontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/halo', function (){
//     echo "<h1>Hallo Selamat Datang di Laravel</h1>";
//     echo "Sebuah Framework untuk pengembangan web";
// });
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout',[LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//Register
Route::get('/register',[RegisterController::class, 'register'])->name(('register'));
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/insert-sql',[AnggotaController::class,'insertsql']);
Route::get('/update',[AnggotaController::class,'update']);
Route::get('/tampil', [AnggotaController::class, 'tampilan']);
Route::get('/insert-timestamp',[AnggotaController::class,'insertTimestamp']);

// Route::get('/projects', function() {
//     return view ('testing.projects');
// });

// Route::get('/', function() {
//     return view ('testing.home');
// });

// Route::get('/about', function() {
//     return view ('testing.about');
// });

// Route::get('/halo', [Testcontroller::class, 'index' ]);