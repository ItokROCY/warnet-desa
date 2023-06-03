<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller{
    public function userPage(){
        return view('halamanUser.userPage');
    }
    public function buyPage(){
        return view('halamanUser.buyPage');
    }
}
