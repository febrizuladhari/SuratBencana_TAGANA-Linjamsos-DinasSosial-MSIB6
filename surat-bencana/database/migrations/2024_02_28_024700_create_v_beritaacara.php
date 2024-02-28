<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
        CREATE OR REPLACE VIEW v_beritaacara AS
        SELECT kecamatans.nama_kecamatan, kelurahans.nama_kelurahan, kelurahans.nama_lurah, kelurahans.nip_lurah, keluargas.alamat, bencanas.jns_bencana, bencanas.tanggal_bencana, bantuans.jns_bantuan
        FROM bantuans
        INNER JOIN bencanas ON bantuans.id_bencana = bencanas.id
        INNER JOIN keluargas ON bencanas.id_keluarga = keluargas.id
        INNER JOIN kelurahans ON keluargas.id_kelurahan = kelurahans.id
        INNER JOIN kecamatans ON kelurahans.id_kecamatan = kecamatans.id;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS v_beritaacara');
    }
};