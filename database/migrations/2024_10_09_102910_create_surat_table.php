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
        Schema::create('surat', function (Blueprint $table) {
            $table->unsignedBigInteger('id_surat')->autoIncrement();
            $table->string('token_surat');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->unsignedBigInteger('tipe_surat_id');
            $table->enum('status_surat',['draft', 'pengajuan', 'disteujui', 'ditolak'])->default('draft');
            $table->timestamps();

            $table->foreign('mahasiswa_id')->references('id_mahasiswa')->on('mahasiswa')->onDelete('cascade');
            $table->foreign('tipe_surat_id')->references('id_tipe_surat')->on('tipe_surat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat');
    }
};
