<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pemasokController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\stokController;
use App\Http\Controllers\kainController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\pelangganController;

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
Route::middleware("auth")->group(function () {
    
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    
    Route::resource('kain', kainController::class);
    Route::resource('stok', stokController::class);
    Route::resource('pemasok', pemasokController::class);
    Route::resource('pelanggan', pelangganController::class);
    Route::resource('transaksi', transaksiController::class);
    
    Route::get('/kainPDF', [kainController::class,'kainPDF']);
    Route::get('/stokPDF', [stokController::class,'stokPDF']);
    Route::get('/pemasokPDF', [pemasokController::class,'pemasokPDF']);
    Route::get('/pelangganPDF', [pelangganController::class,'pelangganPDF']);
    Route::get('/transaksiPDF', [transaksiController::class,'transaksiPDF']);
    
    Route::post("logout",[loginController::class,'logout'])->name('logout');
});
Route::resource("login",loginController::class);
Route::get("login",[loginController::class,'index'])->name('login')->middleware('guest');
