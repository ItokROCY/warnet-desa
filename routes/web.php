<?php

use App\Http\Controllers\adminController;
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

Route::get('/akunBaru', [adminController::class, 'akunBaru']);
Route::get('/tambahBilling', [adminController::class, 'tambahBilling']);
Route::get('/laporanLokal', [adminController::class, 'laporanLokal']);
Route::get('/keuangan', [adminController::class, 'keuangan']);
Route::get('/feedback', [adminController::class, 'feedback']);
Route::get('/hapusAkun', [adminController::class, 'hapusAkun']);
