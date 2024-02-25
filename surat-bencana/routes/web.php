<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


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

