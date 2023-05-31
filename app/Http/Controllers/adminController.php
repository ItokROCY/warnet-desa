<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    function tambahBilling(){
        return view('halamanAdmin.tambahBilling');
    }

    function akunBaru(){
        return view('halamanAdmin.akunBaru');
    }

    function laporanLokal(){
        return view('halamanAdmin.laporanLokal');
    }
    
    function keuangan(){
        return view('halamanAdmin.keuangan');
    }

    function feedback(){
        return view('halamanAdmin.feedback');
    }
    
    function hapusAkun(){
        return view('halamanAdmin.hapusAkun');
    }

    
}
