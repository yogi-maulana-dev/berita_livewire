<?php

namespace App\Livewire\Berita;

use App\Livewire\Forms\Berita\BeritaForm;
use App\Models\Berita;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class BeritaTable extends Component
{
    use WithPagination;

    public BeritaForm $form;

    #[On('dispatch-berita-create-save')]
    #[On('dispatch-berita-create-edit')]
    #[On('dispatch-berita-table-hapus')]
    public function render()
    {
        return view('livewire.berita.berita-table', [
            'berita' => Berita::with(['kategori', 'penulis'])->paginate(10), // Eager loading kategori dan penulis
        ]);
    }
}
