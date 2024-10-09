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
        Schema::create('template_surat', function (Blueprint $table) {
            $table->unsignedBigInteger('id_template_surat')->primary();
            $table->string('token_template');
            $table->string('file_template');

            $table->unsignedBigInteger('tipe_surat_id');

            $table->foreign('tipe_surat_id')->references('id_tipe_surat')->on('tipe_surat')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_surat');
    }
};
