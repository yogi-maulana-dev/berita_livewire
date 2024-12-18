<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritasTable extends Migration
{
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Judul berita
            $table->text('konten'); // Konten berita
            $table->string('gambar')->nullable(); // Gambar (optional)
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Penulis berita (relasi dengan users)
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); // Kategori berita (relasi dengan categories)
            $table->dateTime('tanggal_publikasi')->nullable(); // Tanggal publikasi
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('beritas');
    }
}
