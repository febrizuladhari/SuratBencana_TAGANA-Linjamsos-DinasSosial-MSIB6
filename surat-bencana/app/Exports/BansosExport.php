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




use App\Models\Keluarga;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Bantuan;
use App\Models\DetailBantuan;
use App\Models\Bencana;
use App\Models\Identitas;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

use Maatwebsite\Excel\Facades\Excel;

class BansosExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $keluargas;

    public function __construct($keluargas)
    {
        $this->keluargas = $keluargas;
    }

    public function collection()
    {
        $counter = 1;

        return $this->keluargas->map(function ($keluarga) use (&$counter) {
            return [
                $counter++,
                $keluarga->identitas->first()->nama ?? '',
                // "'".($keluarga->identitas->first()->nik ?? ''),
                // "'".($keluarga->identitas->first()->no_kk ?? ''),
                ($keluarga->identitas->first()->nik ?? ''),
                ($keluarga->identitas->first()->no_kk ?? ''),
                '',
                date('d-m-Y', strtotime($keluarga->bencana->first()->tanggal_bencana ?? '')),
                $keluarga->bencana->first()->alamat_bencana ?? '',
                ($keluarga->alamat)." Kelurahan ".($keluarga->kelurahan->nama_kelurahan ?? '')." ".($keluarga->kelurahan->kecamatan->nama_kecamatan ?? ''),
                '',
            ];
        });

    }

    public function headings(): array
    {
        $year = date('Y');

        return [
            ['Lampiran Nota Dinas Kepala Dinas Kota Medan'],
            ['Nomor', ' ', ': '],
            ['Tanggal', ' ', ': '],
            ['Perihal', ' ', ': Mohon Persetujuan/Pertimbangan SK Wali Kota Medan Tentang Penetapan Penerima Bantuan Sosial Korban Bencana Tahun Anggaran ' . $year],
            [],
            [
                'NO',
                'NAMA',
                'NIK',
                'NOMOR KK',
                'DASAR SURAT',
                'TANGGAL KEJADIAN',
                'ALAMAT KEJADIAN',
                'ALAMAT KK',
                'JUMLAH BANTUAN (Rp)',
            ],
        ];
    }

    public function title(): string
    {
        return 'Lampiran Nota Dinas Kepala Dinas Kota Medan';
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Mengatur style untuk judul
            1    => ['font' => ['bold' => true, 'size' => 14]],
            // Mengatur style untuk header tabel
            6    => ['font' => ['bold' => true]],
        ];
    }

    public function registerEvents(): array
    {
        return [
            // Fungsi ini akan dijalankan setelah lembar kerja Excel dibuat
            AfterSheet::class => function (AfterSheet $event) {
                // Menggabungkan sel judul untuk menutupi sembilan kolom (A-I)
                $event->sheet->mergeCells('A1:I1');
                $event->sheet->mergeCells('A2:B2');
                $event->sheet->mergeCells('A3:B3');
                $event->sheet->mergeCells('A4:B4');
                $event->sheet->mergeCells('C4:I4');
                $event->sheet->getStyle('A6:I6')->applyFromArray([
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
                $event->sheet->getStyle('A6:I'.$lastRow)->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => ['rgb' => '000000'],
                        ],
                    ],
                ]);
                // Menambahkan outline ke setiap sel dalam tabel
                for ($row = 6; $row <= $lastRow; $row++) {
                    for ($col = 'A'; $col <= 'I'; $col++) {
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
