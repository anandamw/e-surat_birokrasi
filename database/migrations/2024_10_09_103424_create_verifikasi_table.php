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
        Schema::create('verifikasi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_verifikasi')->autoIncrement();
            $table->string('token_verifikasi');
            // $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('surat_id');
            $table->enum('status_verifikasi',['pending', 'disetujui', 'ditolak']);
            $table->timestamps();

            $table->foreignId('user_id')->constrained();
            $table->foreign('surat_id')->references('id_surat')->on('surat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verifikasi');
    }
};
