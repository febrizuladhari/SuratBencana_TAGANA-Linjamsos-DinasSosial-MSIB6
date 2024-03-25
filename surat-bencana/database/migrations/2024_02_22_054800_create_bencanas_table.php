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
        Schema::create('bencanas', function (Blueprint $table) {
            $table->id();
            $table->string('jns_bencana');
            $table->unsignedBigInteger('id_keluarga')->nullable();
            $table->foreign('id_keluarga')->references('id')->on('keluargas')->onUpdate('CASCADE');
            $table->text('alamat_bencana');
            $table->date('tanggal_bencana');
            $table->time('waktu_bencana');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bencanas');
    }
};
