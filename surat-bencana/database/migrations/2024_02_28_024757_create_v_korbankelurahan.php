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
        CREATE OR REPLACE VIEW v_korbankelurahan AS
        SELECT kelurahans.nama_kelurahan, keluargas.no_kk, identitas.nik, bencanas.jns_bencana
        FROM bencanas
        INNER JOIN keluargas ON bencanas.id_keluarga = keluargas.id
        INNER JOIN identitas ON keluargas.no_kk = identitas.no_kk
        INNER JOIN kelurahans ON keluargas.id_kelurahan = kelurahans.id
        INNER JOIN kecamatans ON kelurahans.id_kecamatan = kecamatans.id;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS v_korbankelurahan');
    }
};