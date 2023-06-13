<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller{
    public function userPage(){
        $users = User::with('komputer')->get();
        return view('halamanUser.userPage', compact('users'));

        // return view('halamanAdmin.tambahBilling', compact('users'));
    }
    public function buyPage(){
        return view('halamanUser.buyPage');
    }
}
