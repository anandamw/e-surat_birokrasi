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
        Schema::create('tipe_surat', function (Blueprint $table) {
            $table->unsignedBigInteger('id_tipe_surat')->autoIncrement();
            $table->string('token_tipe_surat');
            $table->unsignedBigInteger('kategori_id');
            $table->string('nama_tipe_surat');

            $table->foreign('kategori_id')->references('id_kategori')->on('kategori')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipe_surat');
    }
};
