<?php

namespace App\Models;

use App\Traits\Sigerprojectuuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory, Sigerprojectuuid;

    protected $fillable = [
        'judul',
        'slug',
        'konten',
        'penulis_id',
        'kategori_id',
        'gambar',
        'status',
        'tanggal_publikasi',
    ];

    public function penulis()
    {
        return $this->belongsTo(User::class, 'penulis_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
