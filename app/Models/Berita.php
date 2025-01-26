<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    public $table = 'berita';

    protected $fillable = ['judul', 'slug', 'konten', 'penulis_id', 'kategori_id', 'subkategori_id', 'gambar',  'type', 'views', 'shares', 'status', 'tanggal_publikasi'];

    public function penulis()
    {
        return $this->belongsTo(User::class, 'penulis_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
