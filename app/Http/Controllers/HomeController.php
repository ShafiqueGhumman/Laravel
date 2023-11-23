<?php

namespace App\Http\Controllers;
use App\Models\HomeModel;
use App\Models\AboutModel;
use App\Models\ContactModel;
use App\Models\PortfolioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\BlogModel;
use App\Models\SocialIconModel;

class HomeController extends Controller
{
    public function index(){
        $data['getrecord'] = HomeModel::all();
        $data['meta_title'] = 'Home';
        $data['className']='home';
        return view("index" ,$data);
    }
    public function about(){
        $data['getrecord'] = AboutModel::all();
        $data['meta_title'] = 'About';
        $data['className']='about';
        return view("about" ,$data);
    }
    public function portfolio(){
        $data['getrecord'] = PortfolioModel::latest()->get();
        $data['meta_title'] = 'Portfolio';
        $data['className']='portfolio';
        return view("portfolio",$data);
    }
    public function contact(){
        $data['getrecord'] = SocialIconModel::find(1);
        $data['meta_title'] = 'Contact';
        $data['className']='contact';
        return view("contact",$data);
    }
    public function contact_post(Request $request){
        // dd($request->all());
        $insertRecord =new ContactModel;
        $insertRecord->name = trim($request->name);
        $insertRecord->email = trim($request->email);
        $insertRecord->subject = trim($request->subject);
        $insertRecord->message = trim($request->message);
        $insertRecord->save();
        Mail::to('shafiqueghumman25@gmail.com')->send(new ContactMail($request));
        return redirect()->back()->with('success','Message Submitted Successfully');
    }
    public function blog(){
        $data['getrecord'] = BlogModel::latest()->get();
        $data['meta_title'] = 'Blog';
        $data['className']='blog';
        return view("blog",$data);
    }
    public function blog_post($id,Request $request){
        $data['getrecord'] = BlogModel::find($id);
        $data['meta_title'] = 'Blog-Post';
        $data['className']='blog-post';
        // dd($data['getrecord']);
        return view("blog_post",$data);
    }
}
