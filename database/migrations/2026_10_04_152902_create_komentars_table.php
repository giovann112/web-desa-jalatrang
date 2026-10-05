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
        Schema::create('komentars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('berita_id'); // Menghubungkan komentar dengan berita tertentu
            $table->string('nama');
            $table->string('email')->nullable();
            $table->string('hp')->nullable();
            $table->text('pesan');
            $table->timestamps();

            // Relasi ke tabel beritas
            $table->foreign('berita_id')->references('id')->on('beritas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentars');
    }
};