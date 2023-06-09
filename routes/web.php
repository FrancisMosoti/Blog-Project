<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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
Route::get('/', function(){
    return 'this is home';
});
Route::get('/home', [HomeController::class,'profile'])->middleware('isLoggedIn');
Route::get('/home', [HomeController::class,'show'])->name('back');
// logout routes
Route::get('/logout', [HomeController::class,'logout'])->name('logout');

// register routes
Route::get('/register', [RegisterController::class,'register'])->name('register')->middleware('alreadyLoggedIn');
Route::post('/register', [RegisterController::class,'store']);

// login routes
Route::get('/login', [LoginController::class,'login'])->name('login')->middleware('alreadyLoggedIn');
Route::post('/login', [LoginController::class,'authenticate'])->name('auth');

//show users routes
Route::get('/users', [UsersController::class,'show'])->name('users');

// posts routes
Route::post('/posts', [PostController::class,'store'])->name('posts');
Route::get('/posts', [PostController::class,'post'])->name('post');









