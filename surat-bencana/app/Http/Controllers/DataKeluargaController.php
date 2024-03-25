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
use Dompdf\Dompdf;
use Dompdf\Options;
use Barryvdh\DomPDF\Facade\Pdf;
use DateTime;
use Carbon\Carbon;


class DataKeluargaController extends Controller
{
    public function showFilterDataKeluarga()
    {
        $kecamatan = Kecamatan::all();

        return view('admin.filterDataKeluarga', compact('kecamatan'));
    }

    public function getBencanaByKelurahan(Request $request)
    {
        $kelurahanID = $request->input('kelurahanID');

        // Mengambil bencana berdasarkan kelurahanID
        $bencanas = Bencana::whereHas('keluarga.kelurahan', function ($query) use ($kelurahanID) {
            $query->where('id', $kelurahanID);
        })->pluck('jns_bencana', 'id');

        return response()->json($bencanas);
    }

    public function filterDataKeluarga(Request $request)
    {
        $kecamatanId = $request->input('kecamatan');
        $kelurahanId = $request->input('id_kelurahan');
        $tanggalAwal = $request->input('tanggal_awal');
        $tanggalAkhir = $request->input('tanggal_akhir');
        $bencanaId = $request->input('id_bencana');

        $keluargas = Keluarga::whereHas('kelurahan.kecamatan', function ($query) use ($kecamatanId) {
            $query->where('id', $kecamatanId);
        })->whereHas('kelurahan', function ($query) use ($kelurahanId) {
            $query->where('id', $kelurahanId);
        })->with(['bencana' => function ($query) use ($tanggalAwal, $tanggalAkhir) {
            $query->whereBetween('tanggal_bencana', [$tanggalAwal, $tanggalAkhir])
                ->with(['bantuan' => function ($query) {
                    $query->with('detailbantuan');
                }]);
        }])->get();

        // Membuat koleksi unik berdasarkan nomor KK dan jenis bencana
        $keluargasFiltered = $keluargas->unique(function ($item) {
            return $item->no_kk . $item->bencana->pluck('jns_bencana')->implode('');
        });

        return view('admin.dataDataKeluarga', compact('keluargasFiltered'));

        // Menggunakan model Eloquent untuk mengambil data berdasarkan filter
        // $keluargas = Keluarga::whereHas('kelurahan.kecamatan', function ($query) use ($kecamatanId) {
        //     $query->where('id', $kecamatanId);
        // })->whereHas('kelurahan', function ($query) use ($kelurahanId) {
        //     $query->where('id', $kelurahanId);
        // })->with(['bencana' => function ($query) use ($tanggalAwal, $tanggalAkhir) {
        //     $query->whereBetween('tanggal_bencana', [$tanggalAwal, $tanggalAkhir])
        //         ->with(['bantuan' => function ($query) {
        //             $query->with('detailbantuan');
        //         }]);
        // }])->get();

        // // Ambil jns_bencana yang unik dari hasil filter
        // $jenisBencana = $keluargas->flatMap(function ($keluarga) {
        //     return $keluarga->bencana->pluck('jns_bencana')->unique();
        // });

        // // Filter kembali keluarga berdasarkan jns_bencana yang sama
        // $keluargasFiltered = collect();
        // foreach ($jenisBencana as $jenis) {
        //     $keluargasFiltered = $keluargasFiltered->concat($keluargas->filter(function ($keluarga) use ($jenis) {
        //         return $keluarga->bencana->contains('jns_bencana', $jenis);
        //     }));
        // }

        // return view('admin.dataDataKeluarga', compact('keluargasFiltered'));
    }




}
