<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use App\Mail\ForgotPasswordMail;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // $password = "123456789";
        // $dd = Hash::make($password);
        //  dd($dd);
        return view('bakend.auth.login');
    }
    public function forgot(Request $request){

        return view('bakend.auth.forgot');
    }

    public function forgot_admin(Request $request){
        // dd($request->all());
        $rendome_password = rand(111111111,999999999);
        $user = User::where('email', '=', $request->email)->first();
        if(!empty($user)){
            $user->password = Hash::make($rendome_password);
            $user->save();
            $user->password_rendome = $rendome_password;
            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with('success','Password Successfully send your email box.Please Check your email box.');


        }else{
            return redirect()->back()->with('error','Email ID is not Found!');
        }
    }

    public function login_admin(Request $request){
        // dd($request->all())
        if(Auth::attempt(['email' =>$request->email,'password' =>$request->password],true)){
            if(!empty(Auth::User()->status)){
                if(Auth::User()->is_role == '1'){
                    return redirect()->intended('admin/dashboard');
                }else{
                    return redirect('login')->with('error','Not Admin');
                }
            }
            else{
                $user_id = Auth::user()->id;
                Auth::logout();
                $user = User::find($user_id);
                return redirect('login')->with('success','This email is not verifeied yet!');
            }
        }else{
            return redirect()->back()->with('error','Please enter the correct credentials');

        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect(url('login'));
    }
}
