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



class BeritaAcaraController extends Controller
{
    public function showFilterBeritaAcara()
    {
        $kecamatan = Kecamatan::all();

        return view('admin.filterBeritaAcara', compact('kecamatan'));
    }

    public function getKelurahan(Request $request)
    {
        $kelurahan = Kelurahan::where("id_kecamatan", $request->kecamatanID)->pluck('nama_kelurahan', 'id');

        return response()->json($kelurahan);
    }

    public function filterBeritaAcara(Request $request)
    {
        $kecamatanId = $request->input('kecamatan');
        $kelurahanId = $request->input('id_kelurahan');
        $tanggalAwal = $request->input('tanggal_awal');
        $tanggalAkhir = $request->input('tanggal_akhir');

        // Menggunakan model Eloquent untuk mengambil data berdasarkan filter
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


        return view('admin.dataBeritaAcara', compact('keluargas'));
    }

    public function detailDataBeritaAcara($id)
    {
        // $keluarga = Keluarga::with('kelurahan.kecamatan', 'bencana.bantuan.detailbantuan')->findOrFail($id);
        $bantuan = Bantuan::with('bencana.keluarga.kelurahan.kecamatan', 'detailbantuan')->findOrFail($id);

        // Ubah format tanggal_bencana
        // $bantuan->bencana->tanggal_bencana = DateTime::createFromFormat('Y-m-d', $bantuan->bencana->tanggal_bencana)->format('d F Y');
        $tanggalBencana = Carbon::createFromFormat('Y-m-d', $bantuan->bencana->tanggal_bencana);
        $bantuan->bencana->tanggal_bencana = $tanggalBencana->translatedFormat('d F Y');

        return view('admin.detailDataBeritaAcara', compact('bantuan'));
    }


    public function downloadBeritaAcaraPDF($id)
    {
        $bantuan = Bantuan::with('bencana.keluarga.kelurahan.kecamatan', 'detailbantuan')->findOrFail($id);

        // Mengubah format tanggal_bencana ke "d F Y"
        $bantuan->bencana->tanggal_bencana = Carbon::parse($bantuan->bencana->tanggal_bencana)->translatedFormat('d F Y');

        // Mendapatkan informasi tanggal hari ini
        $tanggal = Carbon::now()->translatedFormat('d'); // Tanggal
        $bulan = Carbon::now()->translatedFormat('F'); // Bulan
        $tahun = Carbon::now()->translatedFormat('Y'); // Tahun

        // Array untuk menerjemahkan angka menjadi kata-kata
        $angka_kata = [
            0 => 'Nol',
            1 => 'Satu',
            2 => 'Dua',
            3 => 'Tiga',
            4 => 'Empat',
            5 => 'Lima',
            6 => 'Enam',
            7 => 'Tujuh',
            8 => 'Delapan',
            9 => 'Sembilan',
            10 => 'Sepuluh',
            11 => 'Sebelas',
            12 => 'Dua Belas',
            13 => 'Tiga Belas',
            14 => 'Empat Belas',
            15 => 'Lima Belas',
            16 => 'Enam Belas',
            17 => 'Tujuh Belas',
            18 => 'Delapan Belas',
            19 => 'Sembilan Belas',
            20 => 'Dua Puluh',
            30 => 'Tiga Puluh',
            40 => 'Empat Puluh',
            50 => 'Lima Puluh',
            60 => 'Enam Puluh',
            70 => 'Tujuh Puluh',
            80 => 'Delapan Puluh',
            90 => 'Sembilan Puluh'
        ];

        // Menerjemahkan tanggal dan tahun menjadi kata-kata
        $tanggal_kata = $this->angkaKeKata($tanggal, $angka_kata);
        $tahun_kata = $this->angkaKeKata($tahun, $angka_kata);

        // Menyiapkan pesan dengan informasi tanggal hari ini
        $tanggalSurat = "tanggal <b>$tanggal_kata</b> bulan <b>$bulan</b> tahun <b>$tahun_kata</b>";

        // return view('admin.beritaAcaraPdf', compact('bantuan', 'tanggalSurat'));

        $pdf = Pdf::loadView('admin.beritaAcaraPdf', compact('bantuan', 'tanggalSurat'))
            ->setOptions(['defaultFont' => 'Arial'])
            ->setPaper('legal');;
        return $pdf->stream('Berita Acara Serah Terima.pdf');
    }


    // Fungsi untuk mengubah angka menjadi kata-kata
    private function angkaKeKata($angka, $angka_kata)
    {
        if ($angka < 20) {
            return $angka_kata[$angka];
        }

        if ($angka < 100) {
            if ($angka % 10 == 0) {
                return $angka_kata[$angka];
            } else {
                return $angka_kata[floor($angka / 10) * 10] . ' ' . $angka_kata[$angka % 10];
            }
        }

        if ($angka < 1000) {
            if ($angka % 100 == 0) {
                return $angka_kata[floor($angka / 100)] . ' Ratus';
            } else {
                return $angka_kata[floor($angka / 100)] . ' Ratus ' . $this->angkaKeKata($angka % 100, $angka_kata);
            }
        }

        // Menangani tahun
        if ($angka >= 1000) {
            $tahun_kata = '';
            $ribuan = floor($angka / 1000);
            $sisa = $angka % 1000;
            if ($ribuan > 1) {
                $tahun_kata .= $this->angkaKeKata($ribuan, $angka_kata) . ' Ribu';
            } elseif ($ribuan == 1) {
                $tahun_kata .= 'Seribu';
            }
            if ($sisa > 0) {
                $tahun_kata .= ' ' . $this->angkaKeKata($sisa, $angka_kata);
            }
            return $tahun_kata;
        }

        return $angka_kata[$angka];
    }





}
