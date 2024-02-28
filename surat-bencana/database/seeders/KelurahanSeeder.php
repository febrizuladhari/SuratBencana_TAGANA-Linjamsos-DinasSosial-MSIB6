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
            'nama_lurah' => 'Dr. ZULKIFLI SYAHPUTRA PULUNGAN, S.STP, M.AP',
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
            'nama_kelurahan' => 'Pasar Merah Timur',
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
            'nama_kelurahan' => 'Babura',
            'nip_lurah' => '19740909 199703 1 002',
            'nama_lurah' => 'AHMAD ZUKRI ALRASYID, S.Sos.,M.I.P',
            'id_kecamatan' => 4,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Darat',
            'nip_lurah' => '19791004 200604 2 004',
            'nama_lurah' => 'MIKHAWATI TARIGAN, S.Si',
            'id_kecamatan' => 4,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Merdeka',
            'nip_lurah' => '19760701 199503 1 001',
            'nama_lurah' => 'AHMAD RIFAI RAMBE, S.Sos',
            'id_kecamatan' => 4,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Padang Bulan',
            'nip_lurah' => '19780112 200604 1 008',
            'nama_lurah' => 'SOFIAN YANOFI M, S.E.',
            'id_kecamatan' => 4,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Petisah Hulu',
            'nip_lurah' => '19850312 201001 1 018',
            'nama_lurah' => 'ELKON ERWIN BGN LIMBONG, S.E.',
            'id_kecamatan' => 4,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Titi Rante',
            'nip_lurah' => '19830923 200112 1 001',
            'nama_lurah' => 'FRANK TONY HATORANGAN HUTAGALUNG, SSTP',
            'id_kecamatan' => 4,
        ]);        
        
        Kelurahan::create([
            'nama_kelurahan' => 'Belawan Bahagia',
            'nip_lurah' => '19730211 200701 1 016',
            'nama_lurah' => 'FAIHSYAL AMIL, S.Sos',
            'id_kecamatan' => 5,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Belawan-I',
            'nip_lurah' => '19810716 200801 1 001',
            'nama_lurah' => 'LUKMANUL HAKIM, S.H.',
            'id_kecamatan' => 5,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Belawan Sicanang',
            'nip_lurah' => '19851212 200502 2 001',
            'nama_lurah' => 'DEBY FAUZIAH, S.Sos, M.AP',
            'id_kecamatan' => 5,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Kota Bangun',
            'nip_lurah' => '19830411 200903 1 006',
            'nama_lurah' => 'RACHMAD ARFINSYAH POHAN, S.H.',
            'id_kecamatan' => 6,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Mabar',
            'nip_lurah' => '19730506 199203 2 003',
            'nama_lurah' => 'YAYUK KURNIAWATI, S.H.',
            'id_kecamatan' => 6,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Mabar Hilir',
            'nip_lurah' => '19900330 201010 1 001',
            'nama_lurah' => 'JUFRI MARK BONARDO SIMANJUNTAK, S.IP. M.Si',
            'id_kecamatan' => 6,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tanjung Mulia',
            'nip_lurah' => '19750821 200902 2 004',
            'nama_lurah' => 'NORMALINA TIODORA, S.E. MAP',
            'id_kecamatan' => 6,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Titi Papan',
            'nip_lurah' => '19920125 201406 1 004',
            'nama_lurah' => 'IRWAN, S.STP, M.SP',
            'id_kecamatan' => 6,
        ]);

        Kelurahan::create([
            'nama_kelurahan' => 'Binjai',
            'nip_lurah' => '19910925 201206 1 003',
            'nama_lurah' => 'MUHAMMAD AWAL SYAHPUTRA, S.STP',
            'id_kecamatan' => 7,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Denai',
            'nip_lurah' => '19671022 200801 1 001',
            'nama_lurah' => 'JULPANUDDIN, S.H.',
            'id_kecamatan' => 7,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tegal Sari Mandala-I',
            'nip_lurah' => '19900310 201406 1 001',
            'nama_lurah' => 'MUHAMMAD NANDA HARAPAN SIREGAR, S.STP',
            'id_kecamatan' => 7,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tegal Sari Mandala-II',
            'nip_lurah' => '19860116 200602 1 001',
            'nama_lurah' => 'RO SINTONG JEITA SM, S.STP, M.Si',
            'id_kecamatan' => 7,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tegal Sari Mandala-III',
            'nip_lurah' => '19750603 200701 1 024',
            'nama_lurah' => 'MUHAMMAD RIZKI, S.Sos',
            'id_kecamatan' => 7,
        ]);

        Kelurahan::create([
            'nama_kelurahan' => 'Cinta Damai',
            'nip_lurah' => '19850908 201001 2 028',
            'nama_lurah' => 'SYENA CHRISTY SEPTIANA SIREGAR, S.Sos',
            'id_kecamatan' => 8,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Dwi Kora',
            'nip_lurah' => '19820111 200112 1 001',
            'nama_lurah' => 'RIO RAHMAD ALAM SIREGAR, S.STP',
            'id_kecamatan' => 8,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Helvetia',
            'nip_lurah' => '19910502 201406 1 001',
            'nama_lurah' => 'M HAFIZ TRI ARNANDA PARINDURI, S.STP, M.AP',
            'id_kecamatan' => 8,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Helvetia Tengah',
            'nip_lurah' => '19750206 200902 2 001',
            'nama_lurah' => 'NAIKMA MARBUN, S.E., MM',
            'id_kecamatan' => 8,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Helvetia Timur',
            'nip_lurah' => '19780424 201001 1 027',
            'nama_lurah' => 'TEGUH SUJATMIKO, ST, M.Kom',
            'id_kecamatan' => 8,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sei Sikambing C-II',
            'nip_lurah' => '19900505 201010 1 001',
            'nama_lurah' => 'MUHAMMAD HIZRIL HUSNA ANGKAT, S.STP',
            'id_kecamatan' => 8,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tanjung Gusta',
            'nip_lurah' => '19760514 199511 1 001',
            'nama_lurah' => 'IRWANTA GINTING, AP',
            'id_kecamatan' => 8,
        ]);
     
        Kelurahan::create([
            'nama_kelurahan' => 'Gedung Johor',
            'nip_lurah' => '19910412 201206 1 001',
            'nama_lurah' => 'HASRATUL QHADAR, S.STP',
            'id_kecamatan' => 9,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Kedai Durian',
            'nip_lurah' => '19930705 201507 1 002',
            'nama_lurah' => 'AHMAD DAMZI HARAHAP, S.STP',
            'id_kecamatan' => 9,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Kwala Bekala',
            'nip_lurah' => '19910114 201206 1 004',
            'nama_lurah' => 'MUHAMMAD YUDHA PRASTYA, S.STP',
            'id_kecamatan' => 9,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pangkalan Masyhur',
            'nip_lurah' => '19820426 200903 1 005',
            'nama_lurah' => 'RIVAI RAMADHANA HARAHAP, S.Si, M.A.P.',
            'id_kecamatan' => 9,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Titi Kuning',
            'nip_lurah' => '19910212 201507 1 001',
            'nama_lurah' => 'AKBAR AR, S,STP',
            'id_kecamatan' => 9,
        ]);

        Kelurahan::create([
            'nama_kelurahan' => 'Kotamatsum-III',
            'nip_lurah' => '19690107 199303 2 003',
            'nama_lurah' => 'MIRNALOY, S.H.',
            'id_kecamatan' => 10,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Mesjid',
            'nip_lurah' => '19830712 200903 1 008',
            'nama_lurah' => 'SYAWALUDDIN, ST',
            'id_kecamatan' => 10,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pandau Hulu-I',
            'nip_lurah' => '19871106 200701 2 001',
            'nama_lurah' => 'MARISI DUMA TAMBA, S.IP, M.Ec.Dev',
            'id_kecamatan' => 10,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pasar Merah Barat',
            'nip_lurah' => '19700329 200701 1 002',
            'nama_lurah' => 'KARIM SURBAKTI, S.H.',
            'id_kecamatan' => 10,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pusat Pasar',
            'nip_lurah' => '19751110 199503 2 001',
            'nama_lurah' => 'LATIFAH ANUM, SH',
            'id_kecamatan' => 10,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sei Rengas-I',
            'nip_lurah' => '19780829 201001 2 006',
            'nama_lurah' => 'EVA LUCIA BR SIMAMORA, S.E.',
            'id_kecamatan' => 10,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sudirejo-I',
            'nip_lurah' => '19700925 200801 1 002',
            'nama_lurah' => 'KASRIN SIBAGARIANG, SE, M.M',
            'id_kecamatan' => 10,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sudirejo-II',
            'nip_lurah' => '19650527 200701 1 021',
            'nama_lurah' => 'IRAWADI, S.H.',
            'id_kecamatan' => 10,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Teladan Barat',
            'nip_lurah' => '19800606 200801 1 002',
            'nama_lurah' => 'JUNI HARDIAN, S.Sos',
            'id_kecamatan' => 10,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Teladan Timur',
            'nip_lurah' => '19920428 201406 1 002',
            'nama_lurah' => 'SURYA SETIA HARAHAP, S.STP',
            'id_kecamatan' => 10,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Besar',
            'nip_lurah' => '19920510 201507 1 003',
            'nama_lurah' => 'GANDI GUSRI, S.STP, M.Si',
            'id_kecamatan' => 11,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Nelayan Indah',
            'nip_lurah' => '19821017 201401 1 002',
            'nama_lurah' => 'HILAL BAHRI',
            'id_kecamatan' => 11,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pekan Labuhan',
            'nip_lurah' => '19821022 200903 1 004',
            'nama_lurah' => 'ANTO SYAPUTRA, S.E.',
            'id_kecamatan' => 11,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sei Mati',
            'nip_lurah' => '19800408 199810 1 001',
            'nama_lurah' => 'EKO HARTADI, S.STP, M.AP',
            'id_kecamatan' => 11,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tangkahan',
            'nip_lurah' => '19800906 201103 1 001',
            'nama_lurah' => 'ELIAS PADANG, S.T',
            'id_kecamatan' => 11,
        ]);

        Kelurahan::create([
            'nama_kelurahan' => 'Aur',
            'nip_lurah' => '19940920 201609 1 002',
            'nama_lurah' => 'FAHREZA KSATRIA PURBA, S.STP., M.Si',
            'id_kecamatan' => 12,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Hamdan',
            'nip_lurah' => '19920224 201507 1 001',
            'nama_lurah' => 'SAHLAN ROMADHON NST, SSTP',
            'id_kecamatan' => 12,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Jati',
            'nip_lurah' => '19760803 200903 1 005',
            'nama_lurah' => 'RISNA HENDRA GUSWIKA, S.E.',
            'id_kecamatan' => 12,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Kampung Baru',
            'nip_lurah' => '19720224 200801 1 001',
            'nama_lurah' => 'EDI INDRA JAYA SIREGAR, S.E.',
            'id_kecamatan' => 12,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sei Mati',
            'nip_lurah' => '19660828 199003 2 004',
            'nama_lurah' => 'PATIMAH GABENA HARAHAP, S.Sos',
            'id_kecamatan' => 12,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sukaraja',
            'nip_lurah' => '19800701 201001 1 036',
            'nama_lurah' => 'DARMAWANSYAH, S.E.',
            'id_kecamatan' => 12,
        ]);

        
        Kelurahan::create([
            'nama_kelurahan' => 'Labuhan Deli',
            'nip_lurah' => '19681223 198903 2 003',
            'nama_lurah' => 'MASYITAH, S.Sos',
            'id_kecamatan' => 13,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Paya Pasir',
            'nip_lurah' => '19690805 200801 1 002',
            'nama_lurah' => 'ABDUL KARIM, SP',
            'id_kecamatan' => 13,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Rengas Pulau',
            'nip_lurah' => '19820424 201101 1 007',
            'nama_lurah' => 'CATUR MUHAMMAD SARJONO, SH, M.Kn',
            'id_kecamatan' => 13,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tanah Enam Ratus',
            'nip_lurah' => '19820404 200902 1 007',
            'nama_lurah' => 'ARI ISMAIL, S.Sos, MM',
            'id_kecamatan' => 13,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Terjun',
            'nip_lurah' => '19930412 201609 1 001',
            'nama_lurah' => 'TAUFIK, S.STP, M.A.P.',
            'id_kecamatan' => 13,
        ]);

        Kelurahan::create([
            'nama_kelurahan' => 'Pahlawan',
            'nip_lurah' => '19820213 200312 1 001',
            'nama_lurah' => 'TONGKU PANUSUNAN SIREGAR, S.H.',
            'id_kecamatan' => 14,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pandau Hilir',
            'nip_lurah' => '19850626 201001 1 013',
            'nama_lurah' => 'FAISAL HARAHAP, S.Kom, M.A.P.',
            'id_kecamatan' => 14,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sei Kera Hilir-II',
            'nip_lurah' => '19680329 199803 1 003',
            'nama_lurah' => 'MUSONNIP, S.IP',
            'id_kecamatan' => 14,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sei Kera Hulu',
            'nip_lurah' => '19821001 200112 1 006',
            'nama_lurah' => 'ADI LAZUARDI RAHMANA, S.A.P',
            'id_kecamatan' => 14,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sidorame Barat-I',
            'nip_lurah' => '19871111 200701 1 001',
            'nama_lurah' => 'YOGI PRAYOGA, S.IP',
            'id_kecamatan' => 14,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sidorame Barat-II',
            'nip_lurah' => '19660410 200701 1 007',
            'nama_lurah' => 'MANGASITUA PASARIBU, S.Sos, M.Si',
            'id_kecamatan' => 14,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sidorame Timur',
            'nip_lurah' => '19850131 201101 1 007',
            'nama_lurah' => 'URIP SAPUTRA TINAMBUNAN, S.H.',
            'id_kecamatan' => 14,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tegal Rejo',
            'nip_lurah' => '19721012 200502 1 002',
            'nama_lurah' => 'DEDI ARMANSYAH, S.AP',
            'id_kecamatan' => 14,
        ]);

        Kelurahan::create([
            'nama_kelurahan' => 'Sei Putih Barat',
            'nip_lurah' => '19730220 200003 2 002',
            'nama_lurah' => 'LINDA SARIATY SIAGIAN, S.E.',
            'id_kecamatan' => 15,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sei Putih Tengah',
            'nip_lurah' => '19890611 201010 2 001',
            'nama_lurah' => 'RIZKA KHAIRUNNISA LUBIS, S.STP, MSP',
            'id_kecamatan' => 15,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sei Putih Timur-I',
            'nip_lurah' => '19840904 201001 1 015',
            'nama_lurah' => 'ALBERT KARDI SIANIPAR, S.E, M.H.',
            'id_kecamatan' => 15,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sei Putih Timur-II',
            'nip_lurah' => '19781217 199803 1 001',
            'nama_lurah' => 'DENY MUKHTAR ZEBUA, SAP',
            'id_kecamatan' => 15,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sei Sikambing-d',
            'nip_lurah' => '19930305 201507 1 001',
            'nama_lurah' => 'LAMBOK SAMUEL PARLAUNGAN, S.STP',
            'id_kecamatan' => 15,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sekip',
            'nip_lurah' => '19920625 201406 1 001',
            'nama_lurah' => 'MUHAMMAD ZULADHARI, S.STP',
            'id_kecamatan' => 15,
        ]);

        Kelurahan::create([
            'nama_kelurahan' => 'Anggrung',
            'nip_lurah' => '19781016 200502 1 002',
            'nama_lurah' => 'ESHA DOLY SYAHPUTRA OHARA, S.T.',
            'id_kecamatan' => 16,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Madras Hulu',
            'nip_lurah' => '19920901 201507 1 003',
            'nama_lurah' => 'MHA MUSTAQIIM SIREGAR, S.STP',
            'id_kecamatan' => 16,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Polonia',
            'nip_lurah' => '19931227 201507 1 001',
            'nama_lurah' => 'HADI WAHYUDI HARAHAP, S.STP, M.SP',
            'id_kecamatan' => 16,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sarirejo',
            'nip_lurah' => '19700301 199007 2 001',
            'nama_lurah' => 'NUR~AINUN, S.H.',
            'id_kecamatan' => 16,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sukadamai',
            'nip_lurah' => '19870426 201001 1 011',
            'nama_lurah' => 'IBNU FAHREEZA, S.E.',
            'id_kecamatan' => 16,
        ]);

        Kelurahan::create([
            'nama_kelurahan' => 'Beringin',
            'nip_lurah' => '19771210 200902 1 001',
            'nama_lurah' => 'IRWANSYAH, S.H, MM',
            'id_kecamatan' => 17,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Padang Bulan Selayang-I',
            'nip_lurah' => '19850802 201001 1 014',
            'nama_lurah' => 'REYZA FAHLEVY LUBIS, S.E.',
            'id_kecamatan' => 17,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Padang Bulan Selayang-II',
            'nip_lurah' => '19921109 201406 2 002',
            'nama_lurah' => 'NOVIA ZAHRA, S.STP',
            'id_kecamatan' => 17,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sempakata',
            'nip_lurah' => '19830901 201101 2 008',
            'nama_lurah' => 'EPTA RIANA BR.TARIGAN, SE, M.Si',
            'id_kecamatan' => 17,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tanjung Sari',
            'nip_lurah' => '19880711 201001 1 002',
            'nama_lurah' => 'IHSAN NUGRAHA HARAHAP, S.E, M.M',
            'id_kecamatan' => 17,
        ]);

        Kelurahan::create([
            'nama_kelurahan' => 'Babura',
            'nip_lurah' => '19661031 199302 1 001',
            'nama_lurah' => 'Drs. RUSLAN ISRA PULUNGAN',
            'id_kecamatan' => 18,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Lalang',
            'nip_lurah' => '19671005 199009 1 001',
            'nama_lurah' => 'JALALUDDIN NASIR, S.E.',
            'id_kecamatan' => 18,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sei Sikambing-B',
            'nip_lurah' => '19900629 201206 1 004',
            'nama_lurah' => 'MUHAMMAD IQBAL, S.STP',
            'id_kecamatan' => 18,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Simpang Tanjung',
            'nip_lurah' => '19860424 200701 1 001',
            'nama_lurah' => 'EDI GURNAWAN, S.IP',
            'id_kecamatan' => 18,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tanjung Rejo',
            'nip_lurah' => '19930112 201507 1 002',
            'nama_lurah' => 'ZIA RIDHO IKHWA, S.STP',
            'id_kecamatan' => 18,
        ]);

        Kelurahan::create([
            'nama_kelurahan' => 'Bantan',
            'nip_lurah' => '19700315 200701 1 047',
            'nama_lurah' => 'AHMAD HUZEL, S.Sos',
            'id_kecamatan' => 19,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Bantan Timur',
            'nip_lurah' => '19920602 201507 1 002',
            'nama_lurah' => 'RACHMAD FAUZI HASIBUAN , S.STP, M.A.P',
            'id_kecamatan' => 19,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Indra Kasih',
            'nip_lurah' => '19820825 200902 1 006',
            'nama_lurah' => 'ARMANSYAH, SE',
            'id_kecamatan' => 19,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sidorejo',
            'nip_lurah' => '19771020 200902 2 003',
            'nama_lurah' => 'RAFNILA LUBIS, S.H.',
            'id_kecamatan' => 19,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sidorejo Hilir',
            'nip_lurah' => '19850701 200312 1 003',
            'nama_lurah' => 'YURIAN FAHMY LUBIS, SSTP, M.AP',
            'id_kecamatan' => 19,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tembung',
            'nip_lurah' => '19740925 200312 2 002',
            'nama_lurah' => 'MERLINDA, S.E.',
            'id_kecamatan' => 19,
        ]);

        Kelurahan::create([
            'nama_kelurahan' => 'Durian',
            'nip_lurah' => '19700507 200801 1 001',
            'nama_lurah' => 'HARUN AL RASYID SIREGAR, SP',
            'id_kecamatan' => 20,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Gaharu',
            'nip_lurah' => '19860217 201505 1 001',
            'nama_lurah' => 'MUHAMMAD FAUZI PULUNGAN, SE, M.A.P.',
            'id_kecamatan' => 20,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Gang Buntu',
            'nip_lurah' => '19670922 200701 1 005',
            'nama_lurah' => 'ASRI MUSLIM, S.H.',
            'id_kecamatan' => 20,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Glugur Darat-I',
            'nip_lurah' => '19921212 201406 2 002',
            'nama_lurah' => 'SINTHIYA ARDITA PRATIWI, S.STP, MAP',
            'id_kecamatan' => 20,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Glugur Darat-II',
            'nip_lurah' => '19790501 200801 1 004',
            'nama_lurah' => 'RIKY IRAWAN NASUTION, S.Sos',
            'id_kecamatan' => 20,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pulo Brayan Bengkel Baru',
            'nip_lurah' => '19770112 201409 1 001',
            'nama_lurah' => 'EFENDI GURUSINGA, S.E',
            'id_kecamatan' => 20,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pulo Brayan Bengkel',
            'nip_lurah' => '19840423 200312 1 008',
            'nama_lurah' => 'SAUT MANUNTUN SITORUS, SST',
            'id_kecamatan' => 20,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pulo Brayan Darat-I',
            'nip_lurah' => '19830412 201001 1 038',
            'nama_lurah' => 'HENDRA KURNIAWAN, S.T.',
            'id_kecamatan' => 20,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Pulo Brayan Darat-II',
            'nip_lurah' => '19840121 201001 2 014',
            'nama_lurah' => 'NURDAMAYANTI SIREGAR, SE, M.AP',
            'id_kecamatan' => 20,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sidodadi',
            'nip_lurah' => '19760424 200112 2 004',
            'nama_lurah' => 'SITI ARNISAH, S.E.',
            'id_kecamatan' => 20,
        ]);

        Kelurahan::create([
            'nama_kelurahan' => 'Baru Ladang Bambu',
            'nip_lurah' => '19720425 199703 2 002',
            'nama_lurah' => 'YUS GEMALA, S.E.',
            'id_kecamatan' => 21,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Kemenangan Tani',
            'nip_lurah' => '19790120 200903 1 004',
            'nama_lurah' => 'JAN RUDI PURBA, S.E.',
            'id_kecamatan' => 21,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Lau Cih',
            'nip_lurah' => '19830517 201101 2 012',
            'nama_lurah' => 'LUKE DUMARIA LUMBANGAOL, S.H',
            'id_kecamatan' => 21,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Mangga',
            'nip_lurah' => '19830703 201001 1 024',
            'nama_lurah' => 'OPTIMA MANALU, S.Sos',
            'id_kecamatan' => 21,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Namo Gajah',
            'nip_lurah' => '19840523 201101 1 013',
            'nama_lurah' => 'GUNAWAN PERANGIN ANGIN, S.T.,MM',
            'id_kecamatan' => 21,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sidalinngkar-B',
            'nip_lurah' => '19920804 201406 1 003',
            'nama_lurah' => 'ANDIKA YEHEZKIEL SEMBIRING, S.STP',
            'id_kecamatan' => 21,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Sidomulyo',
            'nip_lurah' => '19781029 201001 2 009',
            'nama_lurah' => 'DONNA OCTAVIA, SE, Ak',
            'id_kecamatan' => 21,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Simpang Selayang',
            'nip_lurah' => '19801122 201001 2 007',
            'nama_lurah' => 'LISA PRIMA NOVITA PURBA',
            'id_kecamatan' => 21,
        ]);
        
        Kelurahan::create([
            'nama_kelurahan' => 'Tanjung Selamat',
            'nip_lurah' => '19670909 199103 2 001',
            'nama_lurah' => 'UBUDIAH, S.H.,M.Si',
            'id_kecamatan' => 21,
        ]);     
    }
}
