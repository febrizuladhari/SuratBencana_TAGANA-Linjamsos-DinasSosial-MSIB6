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
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('status');
            $table->integer('usia');
            $table->string('jns_kelamin');
            $table->unsignedBigInteger('id_kehamilan')->nullable();
            $table->foreign('id_kehamilan')->references('id')->on('kehamilans');
            $table->text('alamat');
            $table->string('no_kk')->unique();
            $table->unsignedBigInteger('id_kelurahan')->nullable();
            $table->foreign('id_kelurahan')->references('id')->on('kelurahans');
            $table->unsignedBigInteger('id_kecamatan')->nullable();
            $table->foreign('id_kecamatan')->references('id')->on('kecamatans');
            $table->unsignedBigInteger('id_bantuan')->nullable();
            $table->foreign('id_bantuan')->references('id')->on('bantuans');
            $table->unsignedBigInteger('id_bencana')->nullable();
            $table->foreign('id_bencana')->references('id')->on('bencanas');
            $table->date('tanggal_bencana');
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