<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AboutModel;
use App\Models\BlogModel;
use App\Models\ContactModel;
use Illuminate\Http\Request;
use App\Models\HomeModel;
use App\Models\PortfolioModel;
use Illuminate\Support\Str;

class dashboardController extends Controller
{
    public function dashboard(Request $request){
        return view('bakend.dashboard.list');
    }
    public function admin_home(){
        $data['getrecord'] = HomeModel::all();
        return view('bakend.home.list',$data);
    }
    public function admin_home_post(Request $request){
        // dd($request->all());
        if($request->add_to_update == "Add"){
            $insertRecord = request()->validate([
                'profile' => 'required'
            ]);
            $insertRecord = new HomeModel;

        }else{
            $insertRecord = HomeModel::find($request->id);

        }
        $insertRecord->your_name = trim($request->your_name);
        $insertRecord->work_experience = trim($request->work_experience);
        $insertRecord->description = trim($request->description);

        if(!empty($request->file('profile'))){
            if(!empty($insertRecord->profile) && file_exists('public/img/'.$insertRecord->profile))
            {
                unlink('public/img/'.$insertRecord->profile);
            }
            $file = $request->file('profile');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/img/',$filename);
            $insertRecord->profile = $filename;
        }
        $insertRecord->save();

        return redirect()->back()->with('success','Home Page Successfully Save');

    }
    public function admin_about()
    {
        $data['getrecord'] = AboutModel::all();
        return view('bakend.about.list',$data);
    }
    public function admin_about_post(Request $request){
        if($request->add_to_update == "Add"){
            $insertRecord  = $request()->validate([
                'first_name' => 'request'
            ]);
            $insertRecord = new AboutModel;
        }else{
            $insertRecord = AboutModel::find($request->id);
        }

        // dd($request->all());

        $insertRecord->first_name = trim($request->first_name);
        $insertRecord->last_name = trim($request->last_name);
        $insertRecord->age = trim($request->age);
        $insertRecord->nationality = trim($request->nationality);
        $insertRecord->freelance = trim($request->freelance);
        $insertRecord->address = trim($request->address);
        $insertRecord->phone = trim($request->phone);
        $insertRecord->email = trim($request->email);
        $insertRecord->skype = trim($request->skype);
        $insertRecord->langages = trim($request->langages);
        $insertRecord->years_of_experience = trim($request->years_of_experience);
        $insertRecord->completed_projects = trim($request->completed_projects);
        $insertRecord->happy_customers = trim($request->happy_customers);
        $insertRecord->awards_won = trim($request->awards_won);
        $insertRecord->html = trim($request->html);
        $insertRecord->javascript = trim($request->javascript);
        $insertRecord->css = trim($request->css);
        $insertRecord->php = trim($request->php);
        $insertRecord->wordpress = trim($request->wordpress);
        $insertRecord->jquery = trim($request->jquery);
        $insertRecord->angular = trim($request->angular);
        $insertRecord->react = trim($request->react);
        $insertRecord->year_of_experience = trim($request->year_of_experience);
        $insertRecord->title = trim($request->title);
        $insertRecord->sub_title = trim($request->sub_title);
        $insertRecord->description = trim($request->description);
        $insertRecord->save();

        return redirect()->back()->with('success','About Page Successfully Save');

    }
    public function admin_portfolio(){
        $data['getrecord'] = PortfolioModel::get();
        return view('bakend.portfolio.list',$data);
    } public function admin_contact()
    {
        $data['getrecord'] = ContactModel::get();
        return view('bakend.contact.list',$data);
    }
    public function admin_contact_delete($id,Request $request){
        // echo $id;
        $deleteRecord = ContactModel::find($id);
        $deleteRecord->delete();

        return redirect('admin/contact')->with('error','Contact Record Deleted Successfully');
    }
    public function admin_blog(){
        $data['getrecord'] = BlogModel::latest()->get();
        return view('bakend.blog.list',$data);
    }
}
