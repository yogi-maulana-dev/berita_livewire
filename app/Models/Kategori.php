<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public $table = 'kategori';

    protected $fillable = ['nama'];

    public function berita()
    {
        return $this->hasMany(Berita::class, 'kategori_id');
    }

    // Perbaikan relasi - Kategori has many SubKategori
    public function subkategori()
    {
        return $this->hasMany(SubKategori::class, 'kategori_id');
    }
}