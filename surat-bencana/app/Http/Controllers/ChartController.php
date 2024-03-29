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
use Illuminate\Support\Facades\DB;

use App\Events\ModelCreated;
use App\Events\ModelDeleted;
use App\Events\ModelUpdated;

class ChartController extends Controller
{

    public function chartDashboard()
    {
        // Detail Card Dashboard
        $jlhBantuan = Bantuan::count();
        $jlhKeluarga = Keluarga::count();
        $jlhIdentitas = Identitas::count();
        $jlhBencana = Bencana::count();

        // Chart Jenis Kelamin
        $jumlahLakiLaki = Identitas::where('jns_kelamin', 'Laki-laki')->count();
        $jumlahPerempuan = Identitas::where('jns_kelamin', 'Perempuan')->count();

        // Chart bencana per Kecamatan
        $bencanaPerKecamatan = DB::table('kecamatans')
            ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
            ->join('keluargas', 'kelurahans.id', '=', 'keluargas.id_kelurahan')
            ->join('bencanas', 'keluargas.id', '=', 'bencanas.id_keluarga')
            ->select('kecamatans.nama_kecamatan', DB::raw('COUNT(bencanas.id) as jumlah_bencana'))
            ->groupBy('kecamatans.nama_kecamatan')
            ->get()
            ->pluck('jumlah_bencana', 'nama_kecamatan');

        //Chart Jenis Bantuan
        $jenisBantuan = Bantuan::select('jns_bantuan', DB::raw('COUNT(*) as jumlahBantuan'))
                        ->groupBy('jns_bantuan')->get()
                        ->pluck('jumlahBantuan', 'jns_bantuan');

        //Chart Bencana per Tahun
        $bencanaPerTahun = Bencana::selectRaw('YEAR(tanggal_bencana) as year, COUNT(*) as total')
                            ->groupBy('year')
                            ->orderBy('year')
                            ->get();


        return view('admin.dashboard', compact(
            'jlhBantuan', 'jlhKeluarga', 'jlhIdentitas', 'jlhBencana',
            'jumlahLakiLaki', 'jumlahPerempuan',
            'bencanaPerKecamatan',
            'jenisBantuan',
            'bencanaPerTahun'
        ));
    }

    public function getData(Request $request)
    {
        $tahun = $request->tahun;

        $data = Bencana::selectRaw('month(tanggal_bencana) as bulan, count(*) as jumlah')
                ->whereYear('tanggal_bencana', '=', $tahun)
                ->groupBy('bulan')->orderBy('bulan', 'asc')->get();

        return response()->json($data);
    }

    public function detailChart()
    {
        // Detail Card Dashboard
        $jlhBantuan = Bantuan::count();
        $jlhKeluarga = Keluarga::count();
        $jlhIdentitas = Identitas::count();
        $jlhBencana = Bencana::count();

        // Chart Jenis Kelamin
        $jumlahLakiLaki = Identitas::where('jns_kelamin', 'Laki-laki')->count();
        $jumlahPerempuan = Identitas::where('jns_kelamin', 'Perempuan')->count();

        // Chart bencana per Kecamatan
        $bencanaPerKecamatan = DB::table('kecamatans')
            ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
            ->join('keluargas', 'kelurahans.id', '=', 'keluargas.id_kelurahan')
            ->join('bencanas', 'keluargas.id', '=', 'bencanas.id_keluarga')
            ->select('kecamatans.nama_kecamatan', DB::raw('COUNT(bencanas.id) as jumlah_bencana'))
            ->groupBy('kecamatans.nama_kecamatan')
            ->get()
            ->pluck('jumlah_bencana', 'nama_kecamatan');

        //Chart Jenis Bantuan
        $jenisBantuan = Bantuan::select('jns_bantuan', DB::raw('COUNT(*) as jumlahBantuan'))
                        ->groupBy('jns_bantuan')->get()
                        ->pluck('jumlahBantuan', 'jns_bantuan');

        //Chart Bencana per Tahun
        $bencanaPerTahun = Bencana::selectRaw('YEAR(tanggal_bencana) as year, COUNT(*) as total')
                            ->groupBy('year')
                            ->orderBy('year')
                            ->get();

        // Ambil data tahun di tabel bencana
        $tahunBencana = DB::table('bencanas')
                        ->selectRaw('YEAR(tanggal_bencana) as tahun')
                        ->groupBy('tahun')->orderBy('tahun', 'desc')->get();

        // Chart top klasifikasi bencana

        // Chart top kecamatan terdampak bencana

        // Chart top kelurahan terdampak bencana


        return view('admin.detailChart', compact(
            'jlhBantuan', 'jlhKeluarga', 'jlhIdentitas', 'jlhBencana',
            'jumlahLakiLaki', 'jumlahPerempuan',
            'bencanaPerKecamatan',
            'jenisBantuan',
            'bencanaPerTahun',
            'tahunBencana'
        ));
    }




}
