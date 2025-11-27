<?php

namespace App\Http\Controllers;

//use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
//    收到/login Get请求后返回一个login/show.blade.php
    public function show(){
        return view('login.show');
    }

//    接收到 request（login的form）后执行
    public function login(Request $request){
//        验证 input of form 的信息
        $credentials = $request->validate([
//            确认信息内容，比如，邮箱格式，必填项
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('todo.index');
        }

        return back()->withErrors([
            'email' => 'the provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
