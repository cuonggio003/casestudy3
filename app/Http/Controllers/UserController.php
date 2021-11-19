<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(User $user){
        $this->user = $user;
    }

    public function index() 
    {
        $users = User::all();
        return view('backend.home', compact('users'));
    }

    public function login(Request $request)
    {
    $login = $request->only('email', 'password');
    if(Auth::attempt($login))
    {
        $request->session()->flash('you entered it wrong', 'sai tài khoản hoặc mật khẩu');

    }else{
        return redirect()->route('frontend.home');
        $request->session('chào ông chủ');
    }  

    }
    
}
