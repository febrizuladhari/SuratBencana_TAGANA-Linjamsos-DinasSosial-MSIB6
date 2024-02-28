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
        Schema::create('bantuans', function (Blueprint $table) {
            $table->id();
            $table->enum('jns_bantuan', ['Paket Sandang', 'Buffer Stock', 'Permakanan', 'Bansos']);
            $table->unsignedBigInteger('id_bencana')->nullable();
            $table->foreign('id_bencana')->references('id')->on('bencanas')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bantuans');
    }
};
