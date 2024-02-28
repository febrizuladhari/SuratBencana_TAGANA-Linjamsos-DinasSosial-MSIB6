<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\LaporanController;

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


// Auth Controller
Route::get('login', [AuthController::class,'index'])->name('login');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');



Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['cek_login:admin']], function () {

        // Admin Controller
        Route::get('/home', [AdminController::class, 'index'])->name('home');

        Route::get('/berita-acara', [AdminController::class, 'beritaAcara'])->name('berita-acara');
        Route::get('/data-keluarga', [AdminController::class, 'dataKeluarga'])->name('data-keluarga');


        Route::get('/data-laporan', [LaporanController::class, 'datalaporan'])->name('data-laporan');

        Route::get('/bencana', [AdminController::class, 'bencana'])->name('bencana');
        Route::get('/kecamatan', [AdminController::class, 'kecamatan'])->name('kecamatan');
        Route::get('/kelurahan', [AdminController::class, 'kelurahan'])->name('kelurahan');


        // Surat Controller


        // Print Controller


        // Log Controller
        Route::get('/logtambahsurat', [LogController::class, 'logtambahsurat'])->name('logtambahsurat');
        Route::get('/logtambahbencana', [LogController::class, 'logtambahbencana'])->name('logtambahbencana');
        Route::get('/loghapusdata', [LogController::class, 'loghapusdata'])->name('loghapusdata');

    });


    Route::group(['middleware' => ['cek_login:user']], function () {


    });
});











