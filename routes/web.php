<?php

use App\Http\Controllers\webController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('akunBaru');
});

Route::get('/akunBaru', [webController::class, 'akunBaru']);
Route::get('/tambahBilling', [webController::class, 'tambahBilling']);
Route::get('/laporanLokal', [webController::class, 'laporanLokal']);
Route::get('/keuangan', [webController::class, 'keuangan']);
Route::get('/feedback', [webController::class, 'feedback']);
