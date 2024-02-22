<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelurahan;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelurahan::create([
            'nama_kelurahan' => 'Amplas',
            'nip_lurah' => '19930329 201507 1 003',
            'nama_lurah' => 'MUHAMMAD FITRAH JOSA RITONGA, S.STP, M.AP',
            'id_kecamatan' => 1,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Bangun Mulia',
            'nip_lurah' => '19760901 200502 1 005',
            'nama_lurah' => 'JHON KONDAR OMPUSUNGGU, S.T.',
            'id_kecamatan' => 1,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Harjosari-I',
            'nip_lurah' => '19731114 199403 2 003',
            'nama_lurah' => 'SAHARA HARAHAP, AP',
            'id_kecamatan' => 1,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Siti Rejo-II',
            'nip_lurah' => '19890614 201206 1 001',
            'nama_lurah' => 'Dr. . ZULKIFLI SYAHPUTRA PULUNGAN, S.STP, M.AP',
            'id_kecamatan' => 1,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Siti Rejo-III',
            'nip_lurah' => '19830405 200112 1 004',
            'nama_lurah' => 'ALBENA BOANG MANALU, SSTP, M.SP',
            'id_kecamatan' => 1,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Timbang Deli',
            'nip_lurah' => '19781212 200902 1 007',
            'nama_lurah' => 'RIZKI MULYADI LUBIS, S.H.',
            'id_kecamatan' => 1,
        ]);

        Kelurahan::create([
            'nama_kelurahan' => 'Kotamatsum-I',
            'nip_lurah' => '19690103 200801 1 002',
            'nama_lurah' => 'INDRA OLOAN NASUTION, S.Sos',
            'id_kecamatan' => 2,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Kotamatsum-II',
            'nip_lurah' => '19871201 200602 2 001',
            'nama_lurah' => 'DESY CHALIZAH PERMATANINGTYAS HARAHAP, SSTP, MSP',
            'id_kecamatan' => 2,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Kotamatsum-IV',
            'nip_lurah' => '19760805 199602 1 003',
            'nama_lurah' => 'MUHAMMAD YUSUF HANAFIAH SORMIN, S.Sos',
            'id_kecamatan' => 2,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pandau Hulu-II',
            'nip_lurah' => '19850919 200412 1 001',
            'nama_lurah' => 'RIZKI HARI ADAM LUBIS, S.STP',
            'id_kecamatan' => 2,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pasal Merah Timur',
            'nip_lurah' => '19790819 201101 1 007',
            'nama_lurah' => 'MUCHTAR HARAHAP, S.Sos',
            'id_kecamatan' => 2,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sei Rengas Permata',
            'nip_lurah' => '19671017 199103 2 002',
            'nama_lurah' => 'SAFTINA RUMONDANG',
            'id_kecamatan' => 2,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sei Rengas-II',
            'nip_lurah' => '19910312 201206 1 003',
            'nama_lurah' => 'MHD HARVINSYAH ROZI HARAHAP, S.STP',
            'id_kecamatan' => 2,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sukaramai-I',
            'nip_lurah' => '19731221 199303 1 001',
            'nama_lurah' => 'HASRUN SYARIF DONGORAN, S.Sos',
            'id_kecamatan' => 2,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tegal Sari-I',
            'nip_lurah' => '19840417 201101 2 015',
            'nama_lurah' => 'HAFSAH NUR, S.E.',
            'id_kecamatan' => 2,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tegal Sari-II',
            'nip_lurah' => '19840201 200312 1 001',
            'nama_lurah' => 'RANGGA KARFIKA SAKTI, S.STP',
            'id_kecamatan' => 2,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tegal Sari-III',
            'nip_lurah' => '19840407 200903 1 005',
            'nama_lurah' => 'IRWANSYAH, S.Pd, M.Pd',
            'id_kecamatan' => 2,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Glugur Kota',
            'nip_lurah' => '19860228 200502 1 002',
            'nama_lurah' => 'ABDUL RAZAK, S.AB, M.Si',
            'id_kecamatan' => 3,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Karang Berombak',
            'nip_lurah' => '19790315 200502 1 003',
            'nama_lurah' => 'SUHARDI, S.E., M.M.',
            'id_kecamatan' => 3,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Kesawan',
            'nip_lurah' => '19790309 200903 1 005',
            'nama_lurah' => 'MASWAN HARAHAP, S.T.',
            'id_kecamatan' => 3,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pulo Brayan Kota',
            'nip_lurah' => '19660409 200801 1 002',
            'nama_lurah' => 'SUTRISNO, S.Sos',
            'id_kecamatan' => 3,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sei Agul',
            'nip_lurah' => '19930325 201507 1 001',
            'nama_lurah' => 'MUHAMMAD AIDIEL PUTRA PRATAMA, S.STP, M.AP',
            'id_kecamatan' => 3,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Silalas',
            'nip_lurah' => '19770523 201001 1 012',
            'nama_lurah' => 'ERWIN MUNTHE, S.T.',
            'id_kecamatan' => 3,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Belawan Bahagia',
            'nip_lurah' => '19730211 200701 1 016',
            'nama_lurah' => 'FAIHSYAL AMIL, S.Sos',
            'id_kecamatan' => 4,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Belawan-I',
            'nip_lurah' => '19810716 200801 1 001',
            'nama_lurah' => 'LUKMANUL HAKIM, S.H.',
            'id_kecamatan' => 4,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Belawan Sicanang',
            'nip_lurah' => '19851212 200502 2 001',
            'nama_lurah' => 'DEBY FAUZIAH, S.Sos, M.AP',
            'id_kecamatan' => 4,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Kota Bangun',
            'nip_lurah' => '19830411 200903 1 006',
            'nama_lurah' => 'RACHMAD ARFINSYAH POHAN, S.H.',
            'id_kecamatan' => 5,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Mabar',
            'nip_lurah' => '19730506 199203 2 003',
            'nama_lurah' => 'YAYUK KURNIAWATI, S.H.',
            'id_kecamatan' => 5,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Mabar Hilir',
            'nip_lurah' => '19900330 201010 1 001',
            'nama_lurah' => 'JUFRI MARK BONARDO SIMANJUNTAK, S.IP. M.Si',
            'id_kecamatan' => 5,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tanjung Mulia',
            'nip_lurah' => '19750821 200902 2 004',
            'nama_lurah' => 'NORMALINA TIODORA, S.E. MAP',
            'id_kecamatan' => 5,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Titi Papan',
            'nip_lurah' => '19920125 201406 1 004',
            'nama_lurah' => 'IRWAN, S.STP, M.SP',
            'id_kecamatan' => 5,
        ]);

        Kelurahan::create([
            'nama_kelurahan' => 'Binjai',
            'nip_lurah' => '19910925 201206 1 003',
            'nama_lurah' => 'MUHAMMAD AWAL SYAHPUTRA, S.STP',
            'id_kecamatan' => 6,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Denai',
            'nip_lurah' => '19671022 200801 1 001',
            'nama_lurah' => 'JULPANUDDIN, S.H.',
            'id_kecamatan' => 6,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tegal Sari Mandala-I',
            'nip_lurah' => '19900310 201406 1 001',
            'nama_lurah' => 'MUHAMMAD NANDA HARAPAN SIREGAR, S.STP',
            'id_kecamatan' => 6,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tegal Sari Mandala-II',
            'nip_lurah' => '19860116 200602 1 001',
            'nama_lurah' => 'RO SINTONG JEITA SM, S.STP, M.Si',
            'id_kecamatan' => 6,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tegal Sari Mandala-III',
            'nip_lurah' => '19750603 200701 1 024',
            'nama_lurah' => 'MUHAMMAD RIZKI, S.Sos',
            'id_kecamatan' => 6,
        ]);

        Kelurahan::create([
            'nama_kelurahan' => 'Cinta Damai',
            'nip_lurah' => '19850908 201001 2 028',
            'nama_lurah' => 'SYENA CHRISTY SEPTIANA SIREGAR, S.Sos',
            'id_kecamatan' => 7,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Dwi Kora',
            'nip_lurah' => '19820111 200112 1 001',
            'nama_lurah' => 'RIO RAHMAD ALAM SIREGAR, S.STP',
            'id_kecamatan' => 7,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Helvetia',
            'nip_lurah' => '19910502 201406 1 001',
            'nama_lurah' => 'M HAFIZ TRI ARNANDA PARINDURI, S.STP, M.AP',
            'id_kecamatan' => 7,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Helvetia Tengah',
            'nip_lurah' => '19750206 200902 2 001',
            'nama_lurah' => 'NAIKMA MARBUN, S.E., MM',
            'id_kecamatan' => 7,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Helvetia Timur',
            'nip_lurah' => '19780424 201001 1 027',
            'nama_lurah' => 'TEGUH SUJATMIKO, ST, M.Kom',
            'id_kecamatan' => 7,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sei Sikambing C-II',
            'nip_lurah' => '19900505 201010 1 001',
            'nama_lurah' => 'MUHAMMAD HIZRIL HUSNA ANGKAT, S.STP',
            'id_kecamatan' => 7,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tanjung Gusta',
            'nip_lurah' => '19760514 199511 1 001',
            'nama_lurah' => 'IRWANTA GINTING, AP',
            'id_kecamatan' => 7,
        ]);
     
        Kelurahan::create([
            'nama_kelurahan' => 'Gedung Johor',
            'nip_lurah' => '19910412 201206 1 001',
            'nama_lurah' => 'HASRATUL QHADAR, S.STP',
            'id_kecamatan' => 8,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Kedai Durian',
            'nip_lurah' => '19930705 201507 1 002',
            'nama_lurah' => 'AHMAD DAMZI HARAHAP, S.STP',
            'id_kecamatan' => 8,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Kwala Bekala',
            'nip_lurah' => '19910114 201206 1 004',
            'nama_lurah' => 'MUHAMMAD YUDHA PRASTYA, S.STP',
            'id_kecamatan' => 8,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pangkalan Masyhur',
            'nip_lurah' => '19820426 200903 1 005',
            'nama_lurah' => 'RIVAI RAMADHANA HARAHAP, S.Si, M.A.P.',
            'id_kecamatan' => 8,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Titi Kuning',
            'nip_lurah' => '19910212 201507 1 001',
            'nama_lurah' => 'AKBAR AR, S,STP',
            'id_kecamatan' => 8,
        ]);

        Kelurahan::create([
            'nama_kelurahan' => 'Kotamatsum-III',
            'nip_lurah' => '19690107 199303 2 003',
            'nama_lurah' => 'MIRNALOY, S.H.',
            'id_kecamatan' => 9,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Mesjid',
            'nip_lurah' => '19830712 200903 1 008',
            'nama_lurah' => 'SYAWALUDDIN, ST',
            'id_kecamatan' => 9,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pandau Hulu-I',
            'nip_lurah' => '19871106 200701 2 001',
            'nama_lurah' => 'MARISI DUMA TAMBA, S.IP, M.Ec.Dev',
            'id_kecamatan' => 9,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pasar Merah Barat',
            'nip_lurah' => '19700329 200701 1 002',
            'nama_lurah' => 'KARIM SURBAKTI, S.H.',
            'id_kecamatan' => 9,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pusat Pasar',
            'nip_lurah' => '19751110 199503 2 001',
            'nama_lurah' => 'LATIFAH ANUM, SH',
            'id_kecamatan' => 9,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sei Rengas-I',
            'nip_lurah' => '19780829 201001 2 006',
            'nama_lurah' => 'EVA LUCIA BR SIMAMORA, S.E.',
            'id_kecamatan' => 9,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sudirejo-I',
            'nip_lurah' => '19700925 200801 1 002',
            'nama_lurah' => 'KASRIN SIBAGARIANG, SE, M.M',
            'id_kecamatan' => 9,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sudirejo-II',
            'nip_lurah' => '19650527 200701 1 021',
            'nama_lurah' => 'IRAWADI, S.H.',
            'id_kecamatan' => 9,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Teladan Barat',
            'nip_lurah' => '19800606 200801 1 002',
            'nama_lurah' => 'JUNI HARDIAN, S.Sos',
            'id_kecamatan' => 9,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Teladan Timur',
            'nip_lurah' => '19920428 201406 1 002',
            'nama_lurah' => 'SURYA SETIA HARAHAP, S.STP',
            'id_kecamatan' => 9,
        ]);
        
        //medan labuhan
    }
}
