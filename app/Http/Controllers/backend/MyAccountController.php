<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MyAccountController extends Controller
{
    public function admin_my_account(Request $request){
        // echo "abc";
        $data['getrecord'] = User::find(Auth::user()->id);
        return view('bakend.my_account.update',$data);
    }
    public function admin_my_account_update(Request $request){
        // dd($request->all());
        // $user = $request()->validate([
        //     'email' => 'required |unique:users,email,'.Auth::user()->id
        // ]);
        $user = User::find(Auth::user()->id);
        $user->name = trim($request->name);
        $user->email = trim($request->email);

        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect('admin/my_account')->with('success','My Account Succssfully updated!');
    }
}
