<?php

namespace App\Livewire\SubKategori;

use App\Models\Kategori;
use Livewire\Component;

class SubKategoriIndex extends Component
{

    public $kategori_id; // Variabel untuk menyimpan data kategori

    public function mount($kategori_id)
    {
        // Ambil data kategori berdasarkan parameter ID dari URL
        $this->kategori_id = Kategori::findOrFail($kategori_id);
    }
    
    public function render()
    {
         return view('livewire.sub-kategori.sub-kategori-index', [
            'kategori' => $this->kategori_id, // Kirim data kategori ke tampilan
        ]);
    }
}