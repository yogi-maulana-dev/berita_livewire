<?php

namespace App\Livewire\SubKategori;

use App\Livewire\Forms\SubKategori\SubKategoriForm;
use App\Models\SubKategori;
use Livewire\Component;
use Livewire\WithPagination;

class SubKategoriTable extends Component
{

    use WithPagination;

    public SubKategoriForm $form;

    public $kategori_id; // Properti untuk menyimpan kategori_id

    #[On('dispatch-subkategori-create-save')]
    #[On('dispatch-subkategori-table-edit')]
    #[On('dispatch-subkategori-table-hapus')]

        public function mount($kategori_id)
    {
        $this->kategori_id = $kategori_id; // Inisialisasi kategori_id dari parameter URL
    }

    public function render()
    {
        return view('livewire.sub-kategori.sub-kategori-table', [
            // Filter data berdasarkan kategori_id
            'data' => SubKategori::where('kategori_id', $this->kategori_id)->paginate(10),
        ]);
    }
}