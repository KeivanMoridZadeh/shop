<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostLikeController;
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




Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::controller(PostController::class)->group(function () {
    Route::get('/posts','index')->name('posts');
    Route::post('/posts','store');
    Route::get('/posts/{post}','show')->name('post.show');
    Route::delete('/home/{post}/','destroy')->name('post.delete');

});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register','index')->name('register');
    Route::post('/register','store');

});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login','index')->name('login');
    Route::post('/login','store');

});

Route::controller(PostLikeController::class)->group(function () {
    Route::post('/home/{post}/likes','store')->name('post.likes');
    Route::delete('/home/{post}/likes','destroy')->name('post.likes');
});

Route::post('/logout',[LogoutController::class,'store'])->name('logout');
Route::get('/home',[HomeController::class,'index'])->name('home');



