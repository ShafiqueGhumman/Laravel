<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\backend\PortfolioController;

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
Route::get('port',[HomeController::class,'portfolio']);
Route::get('contact',[HomeController::class,'contact']);
Route::post('contact/post',[HomeController::class,'contact_post']);
Route::get('blog',[HomeController::class,'blog']);
Route::get('blog-post',[HomeController::class,'blog_post']);

Route::group(['middleware' => 'admin'],function(){

Route::get('admin/dashboard',[dashboardController::class,'dashboard']);
Route::get('admin/home',[dashboardController::class,'admin_home']);
Route::post('admin/home/post',[dashboardController::class,'admin_home_post']);
Route::get('admin/about',[dashboardController::class,'admin_about']);
Route::post('admin/about/post',[dashboardController::class,'admin_about_post']);

Route::get('admin/portfolio',[dashboardController::class,'admin_portfolio']);
Route::get('admin/contact',[dashboardController::class,'admin_contact']);
Route::get('admin/blog',[dashboardController::class,'admin_blog']);
Route::get('admin/portfolio/add',[PortfolioController::class,'portfolio_add']);

Route::post('admin/portfolio/add',[PortfolioController::class,'portfolio_add_post']);
Route::get('admin/portfolio/edit/{id}',[PortfolioController::class,'admin_portfolio_edit']);
Route::post('admin/portfolio/edit/{id}',[PortfolioController::class,'admin_portfolio_edit_post']);
Route::get('admin/portfolio/delete/{id}',[PortfolioController::class,'admin_portfolio_delete']);

Route::get('admin/contact/delete/{id}',[dashboardController::class,'admin_contact_delete']);
});

Route::get('login',[AuthController::class,'login']);
Route::post('login_admin',[AuthController::class,'login_admin']);

Route::get('forgot',[AuthController::class,'forgot']);
Route::post('forgot_admin',[AuthController::class,'forgot_admin']);

Route::get('logout',[AuthController::class,'logout']);







