<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller{
    function adminLogin(){
        return view('login.adminLogin');
    }
    function index(){
        return view('login.index');
    }
    function login(){

    }
}
