<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public $table = 'menu';

    protected $fillable = ['nama_menu', 'url', 'urut'];

    // public function berita()
    // {
    //     return $this->hasMany(Berita::class, 'kategori_id ');
    // }
}
