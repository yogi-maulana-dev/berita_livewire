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
        Schema::create('subkategori', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('kategori_id')->unique(); // Kolom kategori_id dengan constraint unique
            $table->timestamps();

            // Menambahkan foreign key kategori_id mengacu ke tabel kategori
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subkategori');
    }
};
