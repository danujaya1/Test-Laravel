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
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_bus');
            $table->unsignedBigInteger('id_user');
            $table->string('asal');
            $table->string('tujuan');
            $table->string('nama_penumpang');
            $table->string('email_penumpang');
            $table->string('kursi');
            $table->timestamps();

            // Definisikan foreign keys ke tabel lain jika diperlukan
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_bus')->references('id')->on('buses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};
