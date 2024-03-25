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
        Schema::create('keluargas', function (Blueprint $table) {
            $table->id();
            // $table->char('no_kk', 16)->unique();
            $table->char('no_kk', 16)->index();
            $table->text('alamat');
            $table->unsignedBigInteger('id_kelurahan');
            $table->foreign('id_kelurahan')->references('id')->on('kelurahans')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluargas');
    }
};
