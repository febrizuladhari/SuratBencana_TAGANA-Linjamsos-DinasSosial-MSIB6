<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;

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

class BansosExport implements FromCollection, WithHeadings, ShouldAutoSize
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
                ($keluarga->alamat)." ".($keluarga->kelurahan->nama_kelurahan ?? '')." ".($keluarga->kelurahan->kecamatan->nama_kecamatan ?? ''),
                ($keluarga->alamat)." ".($keluarga->kelurahan->nama_kelurahan ?? '')." ".($keluarga->kelurahan->kecamatan->nama_kecamatan ?? ''),
                '',
            ];
        });

    }

    public function headings(): array
    {
        return [
            'NO',
            'NAMA',
            'NIK',
            'NOMOR KK',
            'DASAR SURAT',
            'TANGGAL KEJADIAN',
            'ALAMAT KEJADIAN',
            'ALAMAT KK',
            'JUMLAH BANTUAN (Rp)',
        ];
    }


}
