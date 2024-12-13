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
        Schema::create('berita', function (Blueprint $table) {
            $table->id(); // Primary key, auto-increment
            $table->string('judul'); // Judul berita
            $table->string('slug')->unique(); // URL-friendly title
            $table->text('konten'); // Konten berita
            $table->foreignId('penulis_id')->nullable()->constrained('users')->onDelete('set null'); // Relasi ke tabel users
            $table->foreignId('kategori_id')->nullable()->constrained('kategori')->onDelete('cascade'); // Relasi ke tabel categories
            $table->string('gambar')->nullable(); // URL atau path gambar berita
            $table->enum('status', ['draft', 'published'])->default('draft'); // Status publikasi
            $table->timestamp('tanggal_publikasi')->nullable(); // Tanggal publikasi
            $table->timestamps(); // Kolom created_at dan updated_at
            $table->softDeletes(); // Kolom deleted_at untuk soft delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
