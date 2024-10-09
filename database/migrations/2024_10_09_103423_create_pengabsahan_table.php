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
        Schema::create('pengabsahan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pengabsahan')->primary();
            $table->string('token_pengabsahan');
            // $table->unsignedBigInteger('user_id');
            $table->enum('jenis_ttd', ['basah', 'digital', 'pembubuhan']);
            $table->string('ttd');
            $table->timestamps();

            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengabsahan');
    }
};
