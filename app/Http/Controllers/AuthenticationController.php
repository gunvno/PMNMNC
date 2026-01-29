<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    //
    public function checkLogin(Request $request){
        if($request->input('username')== 'longtv' && $request->input('pass')=='123456'){
            return "Dang nhap thanh cong";
        }
        else return "Dang nhap that bai";
    }
    public function login(){
        return view('Authentication.login');
    }
    public function register(){
        return view('Authentication.register');
    }
    public function checkRegister(Request $request){
        if($request->input('username')== 'longtv' && $request->input('pass')=='123456'
        && $request->input('pass')== $request->input('repass') 
        && $request->input('mssv')== '0060467' && $request->input('class') == '67PM1' 
        && $request->input('gender') == 'male'){
            return "Dang ky thanh cong";
        }
        else return "Dang ky that bai";
    }
    public function age(Request $request){
        return view("authentication.age");
    }
}
