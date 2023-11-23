<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SocialIconModel;
use Illuminate\Http\Request;

class SocialIconController extends Controller
{
    public function admin_social_icon(Request $request){
        // echo "abc";
        $data['getrecord'] = SocialIconModel::find(1);
        return view('bakend.social_icon.update',$data);
    }
    public function admin_social_icon_update($id, Request $request){
        // dd($request->all());
        $updateRecord = SocialIconModel::find($id);
        $updateRecord->name = trim($request->name);
        $updateRecord->email = trim($request->email);
        $updateRecord->mobile = trim($request->mobile);
        $updateRecord->facebook = trim($request->facebook);
        $updateRecord->twitter = trim($request->twitter);
        $updateRecord->youtube = trim($request->youtube);
        $updateRecord->save();
        return redirect()->back()->with('success','Record Updated Successfully');
    }
}
