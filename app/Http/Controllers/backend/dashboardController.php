<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard(Request $request){
        return view('bakend.dashboard.list');
    }
    public function admin_home(){
        return view('bakend.home.list');
    }
    public function admin_about(){
        return view('bakend.about.list');
    } public function admin_portfolio(){
        return view('bakend.portfolio.list');
    } public function admin_contact(){
        return view('bakend.contact.list');
    } public function admin_blog(){
        return view('bakend.blog.list');
    }
}
