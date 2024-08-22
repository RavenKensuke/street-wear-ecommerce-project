<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function login(){

        if(!empty(Auth::check()) && Auth::user()->is_admin == 1){
            return redirect('admin/dashboard');
        }

        return view('admin.auth.login');
    }

    public function AdminLogin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'is_admin' => 1, 
            'status' => 0 ],
            $remember)){

                return redirect('admin/dashboard');

        } else {
            return redirect()->back()->with('error', "Please Enter Correct Email Or Password");
        }
    }

    public function Adminlogout(){

        Auth::logout();
        return redirect('admin');

    }
}
