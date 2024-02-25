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
            $table->char('nik', 16)->unique();
            $table->string('nama');
            $table->enum('status', ['Kepala Keluarga', 'Istri', 'Anak', 'Anggota Lain']);
            $table->integer('usia');
            $table->enum('jns_kelamin', ['Pria', 'Wanita']);
            $table->enum('kehamilan', ['Hamil', 'Tidak Hamil']);
            $table->text('alamat');
            $table->char('id_keluarga', 16)->unique();
            $table->foreign('id_keluarga')->references('no_kk')->on('keluargas')->onUpdate('CASCADE');
            $table->unsignedBigInteger('id_kelurahan')->nullable();
            $table->foreign('id_kelurahan')->references('id')->on('kelurahans')->onUpdate('CASCADE');
            $table->unsignedBigInteger('id_bantuan')->nullable();
            $table->foreign('id_bantuan')->references('id')->on('bantuans')->onUpdate('CASCADE');
            $table->unsignedBigInteger('id_bencana')->nullable();
            $table->foreign('id_bencana')->references('id')->on('bencanas')->onUpdate('CASCADE');
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
