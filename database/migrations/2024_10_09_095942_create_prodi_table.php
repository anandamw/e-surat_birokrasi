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
        Schema::create('prodi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_prodi')->autoIncrement();
            $table->string('token_prodi');
            $table->unsignedBigInteger('fakultas_id');
            $table->string('nama_prodi');
            $table->string('kode_prodi');
            $table->timestamps();

            $table->foreign('fakultas_id')->references('id_fakultas')->on('fakultas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodi');
    }
};
