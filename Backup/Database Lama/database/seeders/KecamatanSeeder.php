<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kecamatan;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Amplas',
            'nip_camat' => '19790603 199711 2 001',
            'nama_camat' => 'Andrew Fransiska Ayu, S.STP.M.SI',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Area',
            'nip_camat' => '19790122 201001 1 013',
            'nama_camat' => 'Muhammad Ilfan, S.E.',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Barat',
            'nip_camat' => '19880806 200701 1 002',
            'nama_camat' => 'T Roby Chairi, S.IP, M.Si',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Baru',
            'nip_camat' => '19791122 199912 1 001',
            'nama_camat' => 'Frans Seno Ranto Halomoan Siahaan, S.STP, MSP',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Belawan',
            'nip_camat' => '19850419 200412 1 001',
            'nama_camat' => 'Yoga Budi Pratama Irawan, SSTP,M.Si',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Deli',
            'nip_camat' => '19771011 199711 1 001',
            'nama_camat' => 'Indra Utama, S.STP, M.Si',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Denai',
            'nip_camat' => '19860201 200602 1 001',
            'nama_camat' => 'Ananda Sulung Parlaungan, S.STP',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Helvetia',
            'nip_camat' => '19770913 199701 1 001',
            'nama_camat' => 'Putera Ramadan, S.STP',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Johor',
            'nip_camat' => '19850201 200312 1 002',
            'nama_camat' => 'Andry Febriansyah, S.STP, M.AP',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Kota',
            'nip_camat' => '19840101 200312 1 001',
            'nama_camat' => 'Raja Ian Andos Lubis, S.STP,M.AP',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Labuhan',
            'nip_camat' => '19830617 200112 1 001',
            'nama_camat' => 'Khairun Nasyir Tambusai, S.S.T.P., M.SP.',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Maimun',
            'nip_camat' => '19851126 200312 1 001',
            'nama_camat' => 'Tommy Prayoga Sidabalok, S.STP,M.AP',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Marelan',
            'nip_camat' => '19830605 200112 1 002',
            'nama_camat' => 'ANSARI HASIBUAN, S.STP, M.SP',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Perjuangan',
            'nip_camat' => '19831104 200212 1 001',
            'nama_camat' => 'MUHAMMAD PANDAPOTAN RITONGA, S.STP',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Petisah',
            'nip_camat' => '19911006 201206 1 001',
            'nama_camat' => 'ARAFAT SYAM, S.STP',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Polonia',
            'nip_camat' => '19701003 199003 1 001',
            'nama_camat' => 'IRFAN ASARDI SIREGAR, S.Sos',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Selayang',
            'nip_camat' => '19851030 200412 1 002',
            'nama_camat' => 'MUHAMMAD HUSNUL HAFIS, SSTP, M.AP',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Sunggal',
            'nip_camat' => '19730702 199303 1 001',
            'nama_camat' => 'H TENGKU CHAIRUNIZA, S.Sos, MAP',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Tembung',
            'nip_camat' => '19781211 199810 1 001',
            'nama_camat' => 'SUTAN FAUZI ARIF LUBIS, SSTP,M.Si',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Timur',
            'nip_camat' => '19770622 199511 1 001',
            'nama_camat' => 'NOOR ALFI PANE, AP',
        ]);

        Kecamatan::create([
            'nama_kecamatan' => 'Kecamatan Medan Tuntungan',
            'nip_camat' => '19811213 200903 1 004',
            'nama_camat' => 'BERANI PA, S.H., M.H.',
        ]);
    }
}
