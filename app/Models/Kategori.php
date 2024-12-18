<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public $table = 'categories';

    protected $fillable = ['name'];

    public function berita()
    {
        return $this->hasMany(Berita::class, 'category_id ');
    }
}
