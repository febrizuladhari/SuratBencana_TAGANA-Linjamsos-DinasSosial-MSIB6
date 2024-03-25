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
use App\Exports\PermakananExport;
use Dompdf\Dompdf;
use Dompdf\Options;
use Barryvdh\DomPDF\Facade\Pdf;
use DateTime;
use Carbon\Carbon;


class PermakananController extends Controller
{
    public function showFilterPermakanan()
    {
        $kecamatan = Kecamatan::all();

        return view('admin.filterPermakanan', compact('kecamatan'));
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


    public function filterPermakanan(Request $request)
    {
        $kecamatanId = $request->input('kecamatan');
        $kelurahanId = $request->input('id_kelurahan');
        $tanggalAwal = $request->input('tanggal_awal');
        $tanggalAkhir = $request->input('tanggal_akhir');
        $bencanaId = $request->input('id_bencana');

        // Menggunakan model Eloquent untuk mengambil data berdasarkan filter
        $keluargas = Keluarga::whereHas('kelurahan.kecamatan', function ($query) use ($kecamatanId) {
            $query->where('id', $kecamatanId);
        })->whereHas('kelurahan', function ($query) use ($kelurahanId) {
            $query->where('id', $kelurahanId);
        })->with([
            'identitas',
            'kelurahan.kecamatan',
            'bencana' => function ($query) use ($tanggalAwal, $tanggalAkhir, $bencanaId) {
                $query->whereBetween('tanggal_bencana', [$tanggalAwal, $tanggalAkhir])
                    ->where('id', $bencanaId) // Hanya bencana yang dipilih
                    ->whereHas('bantuan', function ($query) {
                        $query->where('jns_bantuan', 'Permakanan')->with('detailbantuan');
                    });
            }
        ])->get();

        // dd($keluargas);
        return view('admin.dataPermakanan', compact('keluargas', 'tanggalAwal', 'tanggalAkhir'));

        // return Excel::download(new PermakananExport($keluargas, $tanggalAwal, $tanggalAkhir, $kecamatanId, $kelurahanId, $bencanaId), 'data_permakanan.xlsx');

    }


    // public function excelPermakanan(Request $request)
    // {
    //     $kecamatanId = $request->input('kecamatan');
    //     $kelurahanId = $request->input('id_kelurahan');
    //     $tanggalAwal = $request->input('tanggal_awal');
    //     $tanggalAkhir = $request->input('tanggal_akhir');
    //     $bencanaId = $request->input('id_bencana');

    //     $keluargas = Keluarga::whereHas('kelurahan.kecamatan', function ($query) use ($kecamatanId) {
    //         $query->where('id', $kecamatanId);
    //     })->whereHas('kelurahan', function ($query) use ($kelurahanId) {
    //         $query->where('id', $kelurahanId);
    //     })->with([
    //         'identitas',
    //         'kelurahan.kecamatan',
    //         'bencana' => function ($query) use ($tanggalAwal, $tanggalAkhir, $bencanaId) {
    //             $query->whereBetween('tanggal_bencana', [$tanggalAwal, $tanggalAkhir])
    //                 ->where('id', $bencanaId)
    //                 ->whereHas('bantuan', function ($query) {
    //                     $query->where('jns_bantuan', 'Permakanan')->with('detailbantuan');
    //                 });
    //         }
    //     ])->get();

    //     dd($keluargas);

    //     return Excel::download(new PermakananExport($keluargas, $tanggalAwal, $tanggalAkhir), 'data_permakanan.xlsx');

    // }

    public function tes(Request $request)
    {
        // $keluargas = Keluarga::with('identitas', 'kelurahan.kecamatan', 'bencana.bantuan.detailbantuan')->get();

        $kecamatanId = $request->input('kecamatan');
        $kelurahanId = $request->input('id_kelurahan');
        $tanggalAwal = $request->input('tanggal_awal');
        $tanggalAkhir = $request->input('tanggal_akhir');
        $bencanaId = $request->input('id_bencana');

        // Menggunakan model Eloquent untuk mengambil data berdasarkan filter
        $keluargas = Keluarga::whereHas('kelurahan.kecamatan', function ($query) use ($kecamatanId) {
            $query->where('id', $kecamatanId);
        })->whereHas('kelurahan', function ($query) use ($kelurahanId) {
            $query->where('id', $kelurahanId);
        })->with([
            'identitas',
            'kelurahan.kecamatan',
            'bencana' => function ($query) use ($tanggalAwal, $tanggalAkhir, $bencanaId) {
                $query->whereBetween('tanggal_bencana', [$tanggalAwal, $tanggalAkhir])
                    ->where('id', $bencanaId) // Hanya bencana yang dipilih
                    ->whereHas('bantuan', function ($query) {
                        $query->where('jns_bantuan', 'Permakanan')->with('detailbantuan');
                    });
            }
        ])->get();

        return view('ekspor.permakanan', compact('keluargas', 'tanggalAwal', 'tanggalAkhir'));
    }

    // public function detailDataPermakanan($id)
    // {
    //     $bantuan = Bantuan::with('bencana.keluarga.kelurahan.kecamatan', 'detailbantuan')->findOrFail($id);

    //     // Ubah format tanggal_bencana
    //     $tanggalBencana = Carbon::createFromFormat('Y-m-d', $bantuan->bencana->tanggal_bencana);
    //     $bantuan->bencana->tanggal_bencana = $tanggalBencana->translatedFormat('d F Y');

    //     return view('admin.detailDataPermakanan', compact('bantuan'));
    // }



}
