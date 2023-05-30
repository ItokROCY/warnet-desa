<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    function tambahBilling(){
        return view('tambahBilling');
    }

    function akunBaru(){
        return view('akunBaru');
    }

    function laporanLokal(){
        return view('laporanLokal');
    }
    
    function keuangan(){
        return view('keuangan');
    }

    function feedback(){
        return view('feedback');
    }

    
}
