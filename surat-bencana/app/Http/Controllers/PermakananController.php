<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Bantuan;
use App\Models\DetailBantuan;
use App\Models\Bencana;
use App\Models\Keluarga;
use App\Models\Identitas;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

use Maatwebsite\Excel\Facades\Excel;


class PermakananController extends Controller
{
    public function showFilterPermakanan()
    {
        $kecamatan = Kecamatan::all();

        return view('admin.filterPermakanan', compact('kecamatan'));
    }

    public function getKelurahan(Request $request)
    {
        $kelurahan = Kelurahan::where("id_kecamatan", $request->kecamatanID)->pluck('nama_kelurahan', 'id');

        return response()->json($kelurahan);
    }

    public function getKeluarga(Request $request)
    {
        $keluarga = Keluarga::where("id_kelurahan", $request->kelurahanID)->select('id', 'no_kk', 'alamat')->get();

        return response()->json($keluarga);
    }

    public function getBencana(Request $request)
    {
        $bencana = Bencana::where("id_keluarga", $request->keluargaID)->pluck('jns_bencana', 'id');
        return response()->json($bencana);
    }

    public function filterPermakanan(Request $request)
    {

    }



}
