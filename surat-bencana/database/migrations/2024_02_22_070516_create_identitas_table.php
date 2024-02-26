<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('identitas', function (Blueprint $table) {
            $table->id();
            $table->char('nik', 16);
            $table->string('nama');
            $table->enum('status', ['Kepala Keluarga', 'Istri', 'Anak', 'Anggota Lain']);
            $table->integer('usia');
            $table->enum('jns_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->enum('kehamilan', ['Hamil', 'Tidak Hamil']);
            // $table->char('no_kk', 16)->unique();
            $table->char('no_kk', 2)->index();
            $table->foreign('no_kk')->references('no_kk')->on('keluargas')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identitas');
    }
};
