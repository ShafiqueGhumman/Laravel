<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\AuthController;
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

Route::get('home',[HomeController::class,'index']);
Route::get('/',[HomeController::class,'index']);

Route::get('about',[HomeController::class,'about']);
Route::get('portfolio',[HomeController::class,'portfolio']);
Route::get('contact',[HomeController::class,'contact']);
Route::get('blog',[HomeController::class,'blog']);
Route::get('blog-post',[HomeController::class,'blog_post']);

Route::get('login',[AuthController::class,'login']);




