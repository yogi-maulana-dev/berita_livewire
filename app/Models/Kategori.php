<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public $table = 'kategori';

    protected $fillable = ['id', 'nama'];

    public function berita()
    {
        return $this->hasMany(Berita::class, 'kategori_id');
    }
}
