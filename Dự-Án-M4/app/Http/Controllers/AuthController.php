<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function login(){
        if (Auth::check()) {
            return redirect()->route('trangchu');
        } else {
            return view('admin.auth.login');
        }
    }
     public function postLogin(Request $request)
    {
        $messages = [
            "email.exists" => "Email hoặc mật khẩu không đúng",
            "password.exists" => "Email hoặc Mật khẩu không đúng",
        ];
        $validator = Validator::make($request->all(), [
            'email' => 'exists:users,email',
            'password' => 'exists:users,password',
        ], $messages);
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            return redirect()->route('trangchu');
        } else {
            return back()->withErrors($validator)->withInput();
        }
    }
public function logout()
{
    Auth::logout();
    return redirect()->route('login');
}
public function home(){
    return view('admin.home');
}
}