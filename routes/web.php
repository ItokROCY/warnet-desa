<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\userController;
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
//--------------------------------------------------------------------------

//--------------------------------------------------------------------------
Route::get('/', function () {
    return view('halamanAdmin.akunBaru');
});

// web navigation
// admin page
Route::get('/akunBaru', [adminController::class, 'akunBaru']);
Route::get('/addbilling/{id}', [adminController::class, 'editbilling']);
Route::post('/updatebilling/{id}', [adminController::class, 'updatebilling']);
Route::post('/addakun', [adminController::class, 'addakun']);
Route::get('/tambahBilling', [adminController::class, 'tambahBilling']);
Route::get('/laporanLokal', [adminController::class, 'laporanLokal']);
Route::get('/keuangan', [adminController::class, 'keuangan']);
Route::get('/feedback', [adminController::class, 'feedback']);
Route::get('/hapusAkun', [adminController::class, 'hapusAkun']);

// user page
Route::get('/userPage', [userController::class, 'userPage']);
Route::get('/buyPage', [userController::class, 'buyPage']);


// login session
Route::get('/index', [sessionController::class, 'index']);
Route::post('/login', [sessionController::class, 'authenticate']);
Route::post('/logout', [sessionController::class, 'logout']);
Route::get('/adminLogin', [sessionController::class, 'adminLogin']);