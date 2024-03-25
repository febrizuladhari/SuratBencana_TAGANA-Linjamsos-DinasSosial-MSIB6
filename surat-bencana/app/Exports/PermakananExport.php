<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Http\Request;


use App\Models\Keluarga;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Bencana;
use App\Models\Bantuan;
use App\Models\DetailBantuan;
use App\Models\Identitas;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use DateTime;
use Carbon\Carbon;

use Maatwebsite\Excel\Facades\Excel;


class PermakananExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles, WithEvents
// class PermakananExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $keluargas;
    protected $tanggalAwal;
    protected $tanggalAkhir;
    protected $kecamatanId;
    protected $kelurahanId;
    protected $bencanaId;

    public function __construct($keluargas, $tanggalAwal, $tanggalAkhir, $kecamatanId, $kelurahanId, $bencanaId)
    {
        $this->keluargas = $keluargas;
        $this->tanggalAwal = $tanggalAwal;
        $this->tanggalAkhir = $tanggalAkhir;
        $this->kecamatanId = $kecamatanId;
        $this->kelurahanId = $kelurahanId;
        $this->bencanaId = $bencanaId;
    }

    // public function view(): View
    // {
    //     return view('ekspor.permakanan', [
    //         'keluargas' => $this->keluargas,
    //         'tanggalAwal' => $this->tanggalAwal,
    //         'tanggalAkhir' => $this->tanggalAkhir,
    //     ]);
    // }

    public function collection()
    {
        $counter = 1;

        // return $this->keluargas->flatMap(function ($keluarga) use (&$counter) {
        //     return $keluarga->identitas->map(function ($identitas) use (&$counter, $keluarga) {
        //         return [
        //             $counter++,
        //             $identitas->nama,
        //             $identitas->usia, // contoh menambahkan kolom umur
        //             $keluarga->alamat,
        //             // Tambahkan kolom lain yang Anda butuhkan dari tabel Identitas
        //         ];
        //     });
        // });

        // return $this->keluargas->map(function ($keluarga) use (&$counter) {
        //     return [
        //         $counter++,
        //         // optional($keluarga->identitas)->nama,
        //         $keluarga->identitas->first()->nama ?? '',
        //         $keluarga->alamat,
        //     ];
        // });

        // return $this->keluargas->map(function ($keluarga) use (&$counter) {
        //     $data = [];

        //     // Nomor urut
        //     $data[] = $counter++;

        //     // Nama dari tabel identitas
        //     $namaIdentitas = $keluarga->identitas->pluck('nama')->toArray(); // Mengubah koleksi menjadi array
        //     $jumlahNama = count($namaIdentitas); // Menghitung jumlah nama dalam keluarga

        //     // Mengisi kolom nama untuk setiap nama dalam keluarga
        //     for ($i = 0; $i < $jumlahNama; $i++) {
        //         $data[] = $namaIdentitas[$i]; // Menambahkan setiap nama sebagai elemen baru dalam kolom yang sama
        //     }

        //     // Alamat dari tabel keluarga
        //     $data[] = $keluarga->alamat;

        //     // Contoh tambahan, jika ingin menampilkan lebih banyak informasi dari keluarga
        //     // $data[] = $keluarga->nomor_telepon;

        //     return $data;
        // });

    }


    public function headings(): array
    {
        $tanggalHariIni = Carbon::now()->translatedFormat('l, d F Y');

        return [
            ['DAFTAR TANDA TERIMA NASI BUNGKUS'],
            ['UNTUK KORBAN BENCANA KEBAKARAN TANGGAL '],
            ['ALAMAT KEJADIAN', ' ', ': '],
            ['KELURAHAN', ' ', ': '],
            ['KECAMATAN', ' ', ': '],
            ['HARI', ' ', ': ' . $tanggalHariIni],
            [],
            [
                'NO',
                'NAMA',
                'ALAMAT',
                'TANDA TANGAN PENERIMA MAKAN',
            ],
            [
                '',
                '',
                '',
                'MAKAN PAGI',
                'MAKAN SIANG',
                'MAKAN MALAM',]
        ];
    }

    public function title(): string
    {
        return 'Daftar Penerima Bantuan Permakanan';
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Mengatur style untuk judul
            1  => ['font' => ['bold' => true, 'size' => 14]],
            2  => ['font' => ['bold' => true, 'size' => 14]],
            3  => ['font' => ['bold' => true, 'size' => 14]],
            4  => ['font' => ['bold' => true, 'size' => 14]],
            5  => ['font' => ['bold' => true, 'size' => 14]],
            6  => ['font' => ['bold' => true, 'size' => 14]],
            // Mengatur style untuk header tabel
            8    => ['font' => ['bold' => true]],
            9    => ['font' => ['bold' => true]],
        ];
    }

    public function registerEvents(): array
    {
        return [
            // Fungsi ini akan dijalankan setelah lembar kerja Excel dibuat
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->mergeCells('A1:F1');
                $event->sheet->mergeCells('A2:F2');
                $event->sheet->mergeCells('A2:B2');
                $event->sheet->mergeCells('A3:B3');
                $event->sheet->mergeCells('A4:B4');
                $event->sheet->mergeCells('A5:B5');
                $event->sheet->mergeCells('A6:B6');
                $event->sheet->mergeCells('A8:A9');
                $event->sheet->mergeCells('B8:B9');
                $event->sheet->mergeCells('C8:C9');
                $event->sheet->mergeCells('D8:F8');
                $event->sheet->getStyle('A8:F9')->applyFromArray([
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => [
                            'rgb' => 'c8c8c8',
                        ],
                    ],
                ]);

                // Mendapatkan sel terakhir dengan data
                $lastRow = $event->sheet->getHighestRow();

                // Menambahkan outline ke seluruh isi tabel dari A6 ke sel terakhir
                $event->sheet->getStyle('A8:F'.$lastRow)->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => ['rgb' => '000000'],
                        ],
                    ],
                ]);
                // Menambahkan outline ke setiap sel dalam tabel
                for ($row = 8; $row <= $lastRow; $row++) {
                    for ($col = 'A'; $col <= 'F'; $col++) {
                        $event->sheet->getStyle($col.$row)->applyFromArray([
                            'borders' => [
                                'allBorders' => [
                                    'borderStyle' => Border::BORDER_THIN,
                                    'color' => ['rgb' => '000000'],
                                ],
                            ],
                        ]);
                    }
                }
            },
        ];

    }


}
