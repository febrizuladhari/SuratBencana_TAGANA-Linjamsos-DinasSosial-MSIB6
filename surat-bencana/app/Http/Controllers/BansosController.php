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
use App\Exports\BansosExport;


class BansosController extends Controller
{

    public function showFilterBansos()
    {
        $kecamatan = Kecamatan::all();
        return view('admin.filterBansos', compact('kecamatan'));
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


    public function filterBansos(Request $request)
    {
        $query = Keluarga::with([
            'bencana' => function ($query) {
                $query->whereHas('bantuan', function ($q) {
                    $q->where('jns_bantuan', 'Bansos');
                });
            },
            'identitas' => function ($query) {
                $query->where('status', 'Kepala Keluarga');
            },
            'kelurahan.kecamatan'
        ]);

        if ($request->has('tanggal_awal') && $request->has('tanggal_akhir')) {
            $query->whereHas('bencana', function ($q) use ($request) {
                $q->whereBetween('tanggal_bencana', [$request->tanggal_awal, $request->tanggal_akhir]);
            });
        }

        $keluargas = $query->get();

        return view('admin.dataBansos', compact('keluargas'));

    }

    public function excelBansos(Request $request)
    {
        $query = Keluarga::with([
            'bencana' => function ($query) {
                $query->whereHas('bantuan', function ($q) {
                    $q->where('jns_bantuan', 'Bansos');
                });
            },
            'identitas' => function ($query) {
                $query->where('status', 'Kepala Keluarga');
            },
            'kelurahan.kecamatan'
        ]);

        if ($request->has('tanggal_awal') && $request->has('tanggal_akhir')) {
            $query->whereHas('bencana', function ($q) use ($request) {
                $q->whereBetween('tanggal_bencana', [$request->tanggal_awal, $request->tanggal_akhir]);
            });
        }

        $keluargas = $query->get();

        return Excel::download(new BansosExport($keluargas), 'Data Bantuan Sosial.xlsx');
    }

    // public function showBansos()
    // {
    //     return view('admin.dataBansos');
    // }

}
