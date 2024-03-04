<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BencanaController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\DetailBantuanController;


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
        Route::get('/tambahBencana', [BencanaController::class, 'create'])->name('tambahBencana');
        Route::post('/bencana', [BencanaController::class, 'store'])->name('bencana-store');
        Route::delete('/bencana/{id}', [BencanaController::class, 'destroy'])->name('bencana-destroy');

        Route::get('/bantuan', [BantuanController::class, 'index'])->name('bantuan');
        Route::get('/bantuan/{id}/edit', [BantuanController::class, 'edit'])->name('bantuan-edit');
        Route::put('/bantuan/{id}', [BantuanController::class, 'update'])->name('bantuan-update');
        Route::post('/bantuan', [BantuanController::class, 'store'])->name('bantuan-store');
        Route::delete('/bantuan/{id}', [BantuanController::class, 'destroy'])->name('bantuan-destroy');
        Route::get('/tambahBantuan', [BantuanController::class, 'create'])->name('tambahBantuan');
        Route::get('/getKelurahan', [BantuanController::class, 'getKelurahan']);
        Route::get('/getKeluarga', [BantuanController::class, 'getKeluarga']);
        Route::get('/getBencana', [BantuanController::class, 'getBencana']);
        Route::get('/getBantuan', [BantuanController::class, 'getBantuan']);


        Route::get('/detailBantuan', [DetailBantuanController::class, 'index'])->name('detailBantuan');
        Route::get('/detailBantuan/{id}/edit', [DetailBantuanController::class, 'edit'])->name('detailBantuan-edit');
        Route::put('/detailBantuan/{id}', [DetailBantuanController::class, 'update'])->name('detailBantuan-update');
        Route::get('/tambahDetailBantuan', [DetailBantuanController::class, 'create'])->name('tambahDetailBantuan');
        Route::delete('/detailBantuan/{id}', [DetailBantuanController::class, 'destroy'])->name('detailBantuan-destroy');
        Route::post('/detailBantuan/store', [DetailBantuanController::class, 'store'])->name('detailBantuan-store');
        Route::get('/getKelurahan', [DetailBantuanController::class, 'getKelurahan']);
        Route::get('/getKeluarga', [DetailBantuanController::class, 'getKeluarga']);
        Route::get('/getBencana', [DetailBantuanController::class, 'getBencana']);
        Route::get('/getBantuan', [DetailBantuanController::class, 'getBantuan']);

        Route::get('/kelurahan', [KelurahanController::class, 'index'])->name('kelurahan');
        Route::get('/kelurahan/{id}/edit', [KelurahanController::class, 'edit'])->name('kelurahan-edit');
        Route::put('/kelurahan/{id}', [KelurahanController::class, 'update'])->name('kelurahan-update');

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











