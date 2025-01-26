<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{
    use HasFactory;

    public $table = 'subkategori';

    protected $fillable = ['nama_sub', 'kategori_id','urut'];

    // Perbaikan relasi - SubKategori belongs to Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}