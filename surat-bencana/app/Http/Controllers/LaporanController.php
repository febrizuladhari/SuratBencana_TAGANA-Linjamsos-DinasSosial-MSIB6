<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Keluarga;
use App\Models\Identitas;
use App\Models\Bencana;
use RealRashid\SweetAlert\Facades\Alert;

use App\Events\ModelCreated;
use App\Events\ModelDeleted;
use App\Events\ModelUpdated;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function laporanBencana()
     {
        $bencana = Bencana::join('keluargas', 'bencanas.id_keluarga', '=', 'keluargas.id')
        -> join('kelurahans', 'keluargas.id_kelurahan', '=', 'kelurahans.id')
        -> join('kecamatans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
        ->get();
         return view('admin.laporanBencana', ['bencana' => $bencana,]);
     }

     public function laporanKeluarga()
     {
        $keluarga = Bencana::join('keluargas', 'bencanas.id_keluarga', '=', 'keluargas.id')
        -> join('identitas', 'keluargas.no_kk', '=', 'identitas.no_kk')
        -> join('kelurahans', 'keluargas.id_kelurahan', '=', 'kelurahans.id')
        -> join('kecamatans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
        -> where('identitas.status', '=', 'Kepala Keluarga')
        -> get();
         return view('admin.laporanKeluarga', ['keluarga' => $keluarga,]);
     }

     public function laporanJiwa()
     {
        $jiwa = Bencana::join('keluargas', 'bencanas.id_keluarga', '=', 'keluargas.id')
        -> join('identitas', 'keluargas.no_kk', '=', 'identitas.no_kk')
        -> join('kelurahans', 'keluargas.id_kelurahan', '=', 'kelurahans.id')
        -> join('kecamatans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
        -> get();
         return view('admin.laporanJiwa', ['jiwa' => $jiwa,]);
     }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
