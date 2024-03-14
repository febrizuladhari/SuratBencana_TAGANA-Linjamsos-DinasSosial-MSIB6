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
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\BansosController;


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



Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['cek_login:admin']], function () {

        Route::get('register', [AuthController::class,'register'])->name('register');
        Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

        // Admin Controller
        // Route::get('/home', [AdminController::class, 'index'])->name('home');

        Route::get('/berita-acara', [AdminController::class, 'beritaAcara'])->name('berita-acara');
        Route::get('/data-keluarga', [AdminController::class, 'dataKeluarga'])->name('data-keluarga');

        // Bansos
        Route::get('/bansos/filter', [BansosController::class, 'showFilterBansos'])->name('bansos-filter-form');
        Route::get('/bansos', [BansosController::class, 'filterBansos'])->name('bansos-filter');
        Route::get('/bansos-download', [BansosController::class, 'excelBansos'])->name('bansos-download');

        // Route::get('/bansos/{bansos}', [BansosController::class, 'showBansos'])->name('bansos-show');


        Route::get('/data-laporan', [LaporanController::class, 'datalaporan'])->name('data-laporan');

        //Bencana
        Route::get('/bencana', [BencanaController::class, 'index'])->name('bencana');
        Route::get('/bencana/{id}/edit', [BencanaController::class, 'edit'])->name('bencana-edit');
        Route::put('/bencana/{id}', [BencanaController::class, 'update'])->name('bencana-update');
        Route::get('/tambahBencana', [BencanaController::class, 'create'])->name('tambahBencana');
        Route::post('/bencana', [BencanaController::class, 'store'])->name('bencana-store');
        Route::delete('/bencana/{id}', [BencanaController::class, 'destroy'])->name('bencana-destroy');


        // Bantuan
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


        //Detail Bantuan
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

        //Kelurahan
        Route::get('/kelurahan', [KelurahanController::class, 'index'])->name('kelurahan');
        Route::get('/kelurahan/{id}/edit', [KelurahanController::class, 'edit'])->name('kelurahan-edit');
        Route::put('/kelurahan/{id}', [KelurahanController::class, 'update'])->name('kelurahan-update');

        //Kecamatan
        Route::get('/kecamatan', [KecamatanController::class, 'index'])->name('kecamatan');
        Route::get('/kecamatan/{id}/edit', [KecamatanController::class, 'edit'])->name('kecamatan-edit');
        Route::put('/kecamatan/{id}', [KecamatanController::class, 'update'])->name('kecamatan-update');

        //Keluarga
        Route::get('/keluarga', [KeluargaController::class, 'index'])->name('keluarga');
        Route::get('/keluarga/{id}/edit', [KeluargaController::class, 'edit'])->name('keluarga-edit');
        Route::put('/keluarga/{id}', [KeluargaController::class, 'update'])->name('keluarga-update');
        Route::get('/tambahKeluarga', [KeluargaController::class, 'create'])->name('tambahKeluarga');
        Route::post('/tambahKeluarga/store', [KeluargaController::class, 'store'])->name('tambahKeluarga-store');
        Route::get('/getKelurahan', [KeluargaController::class, 'getKelurahan']);

        //Identitas
        Route::get('/identitas', [IdentitasController::class, 'index'])->name('identitas');
        Route::get('/identitas/{id}/edit', [IdentitasController::class, 'edit'])->name('identitas-edit');
        Route::put('/identitas/{id}', [IdentitasController::class, 'update'])->name('identitas-update');
        Route::get('/tambahIdentitas', [IdentitasController::class, 'create'])->name('tambahIdentitas');
        Route::post('/identitas/store', [IdentitasController::class, 'store'])->name('identitas-store');
        Route::delete('/identitas/{id}', [IdentitasController::class, 'destroy'])->name('identitas-destroy');
        Route::get('/getKelurahan', [IdentitasController::class, 'getKelurahan']);
        Route::get('/getKeluarga', [IdentitasController::class, 'getKeluarga']);
        Route::get('getKehamilan/{selectedStatus}', [IdentitasController::class, 'getKehamilan']);

        //Profile
        Route::get('/profile', [ProfileController::class, 'showGantiPassword'])->name('profile');
        Route::post('/profile', [ProfileController::class, 'gantiPassword'])->name('profile-update');


        //Chart
        Route::get('/home', [ChartController::class, 'chartDashboard'])->name('home');



        //Data Laporan
        Route::get('/laporan-bencana', [LaporanController::class, 'laporanBencana'])->name('laporan-bencana');
        Route::get('/laporan-keluarga', [LaporanController::class, 'laporanKeluarga'])->name('laporan-keluarga');
        Route::get('/laporan-jiwa', [LaporanController::class, 'laporanJiwa'])->name('laporan-jiwa');

        // Surat Controller



        // Print Controller


        // Log Controller
        Route::get('/logLoginLogout', [LogController::class, 'logLoginLogout'])->name('logLoginLogout');
        Route::get('/logcreate', [LogController::class, 'logCreate'])->name('logcreate');
        Route::get('/logupdate', [LogController::class, 'logUpdate'])->name('logupdate');
        Route::get('/logdelete', [LogController::class, 'logDelete'])->name('logdelete');

    });


    Route::group(['middleware' => ['cek_login:user']], function () {




    });


});











