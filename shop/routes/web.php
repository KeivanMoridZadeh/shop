<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
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
    return view('Posts.posts');
});
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::controller(PostController::class)->group(function () {
    Route::get('/posts','index')->name('posts');
    Route::post('/posts','store');
    Route::get('/posts/{post}','show')->name('post.show');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register','index')->name('posts');
    Route::post('/register','store');

});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login','index')->name('posts');
    Route::post('/login','store');

});
Route::post('/logout',[LogoutController::class,'store'])->name('logout');


