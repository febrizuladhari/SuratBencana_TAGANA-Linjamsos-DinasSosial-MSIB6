<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BencanaController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\IdentitasController;
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
Route::get('/', [AuthController::class,'index'])->name('login');
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

        Route::get('/bencana', [BencanaController::class, 'index'])->name('bencana');
        Route::get('/bencana/{id}/edit', [BencanaController::class, 'edit'])->name('bencana-edit');
        Route::put('/bencana/{id}', [BencanaController::class, 'update'])->name('bencana-update');

        //editKecamatan
        Route::get('/kecamatan', [KecamatanController::class, 'index'])->name('kecamatan');
        Route::get('/kecamatan/{id}/edit', [KecamatanController::class, 'edit'])->name('kecamatan-edit');
        Route::put('/kecamatan/{id}', [KecamatanController::class, 'update'])->name('kecamatan-update');

        //editKeluarga
        Route::get('/keluarga', [KeluargaController::class, 'index'])->name('keluarga');
        Route::get('/keluarga/{id}/edit', [KeluargaController::class, 'edit'])->name('keluarga-edit');
        Route::put('/keluarga/{id}', [KeluargaController::class, 'update'])->name('keluarga-update');

        //editIdentitas
        Route::get('/identitas', [IdentitasController::class, 'index'])->name('identitas');
        Route::get('/identitas/{id}/edit', [IdentitasController::class, 'edit'])->name('identitas-edit');
        Route::put('/identitas/{id}', [IdentitasController::class, 'update'])->name('identitas-update');


// Route::get('/bencana/create', 'BencanaController@create');
// Route::post('/bencana', 'BencanaController@store');

// Route::get('/bencana/{id}', 'BencanaController@show');
// Route::get('/bencana/{id}/edit', 'BencanaController@edit');
// Route::patch('/bencana/{id}', 'BencanaController@update');

// Route::delete('/bencana/{id}', 'BencanaController@destroy');


        // Route::get('/kecamatan', [AdminController::class, 'kecamatan'])->name('kecamatan');
        Route::get('/kelurahan', [AdminController::class, 'kelurahan'])->name('kelurahan');

        //Data Laporan
        Route::get('/laporan-bencana', [LaporanController::class, 'laporanBencana'])->name('laporan-bencana');
        Route::get('/laporan-keluarga', [LaporanController::class, 'laporanKeluarga'])->name('laporan-keluarga');
        Route::get('/laporan-jiwa', [LaporanController::class, 'laporanJiwa'])->name('laporan-jiwa');

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











