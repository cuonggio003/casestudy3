<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Services\LoginService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    protected $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    function showFormLogin()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $validateData = $request->validate( [
            'email' => 'required|email:filter',
            'password' => 'required'

        ]);
        
        

        if ($this->loginService->checkLogin($request)) {
            return redirect()->route('frontend.home');
        }
        

        Session::flash('error', 'Tài khoản mật khẩu không chính xác!');
        

        return back();
    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }


    public function showFormChangePassword(){
        return view('change-password');
    }


    public function changePassword(Request $request){
        $user = Auth::user();
        $currentPassword = $user->password;
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:3',
            'confirmPassword' => 'required|same:newPassword',

        ]);
        if(!Hash::check($request->currentPassword, $currentPassword)){
            return redirect()->back()->withErrors(['currentPassword' => 'Sai Password hiện tại ']);
        }
        $user->password = Hash::make($request->newPassword);

        $user->save();
        return redirect()->route('login');

    
    }
}
