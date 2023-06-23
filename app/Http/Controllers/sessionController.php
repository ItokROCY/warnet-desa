<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class sessionController extends Controller{
    function adminLogin(){
        return view('login.adminLogin');
    }
    function index(){
        return view('login.index');
    }
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        // dd('berhasil');

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/userPage');
        }

        return back()->with('loginError', 'Login Failed');
    }

    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/index');
    }
}
