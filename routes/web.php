<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\dashboardController;

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

Route::group(['middleware' => 'admin'],function(){

Route::get('admin/dashboard',[dashboardController::class,'dashboard']);
Route::get('admin/home',[dashboardController::class,'admin_home']);
Route::get('admin/about',[dashboardController::class,'admin_about']);
Route::get('admin/portfolio',[dashboardController::class,'admin_portfolio']);
Route::get('admin/contact',[dashboardController::class,'admin_contact']);
Route::get('admin/blog',[dashboardController::class,'admin_blog']);
});

Route::get('login',[AuthController::class,'login']);
Route::post('login_admin',[AuthController::class,'login_admin']);

Route::get('forgot',[AuthController::class,'forgot']);
Route::get('logout',[AuthController::class,'logout']);







