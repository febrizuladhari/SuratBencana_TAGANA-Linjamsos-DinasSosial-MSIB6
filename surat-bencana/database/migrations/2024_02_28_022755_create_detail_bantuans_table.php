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
        Schema::create('detail_bantuans', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi');
            $table->integer('jumlah');
            $table->unsignedBigInteger('id_bantuan')->nullable();
            $table->foreign('id_bantuan')->references('id')->on('bantuans')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_bantuans');
    }
};
