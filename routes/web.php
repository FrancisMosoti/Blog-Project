<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\profileController;

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
//Home route
Route::get('/', function () {return view('home');})->name('home');


// register routes
Route::get('/register', [RegisterController::class,'register'])->name('register');
Route::post('/register', [RegisterController::class,'store']);

// login routes
Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/login', [LoginController::class,'authenticate'])->name('auth');

//show users routes
Route::get('/users', [UsersController::class,'show'])->name('users');

// profile routes
Route::get('/profile', [profileController::class,'profile'])->name('profile')->middleware('isLoggedIn');

// logout routes
Route::get('/logout', [profileController::class,'logout'])->name('logout');








