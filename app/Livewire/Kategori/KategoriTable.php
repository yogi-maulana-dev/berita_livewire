<?php

namespace App\Livewire\Kategori;

use App\Livewire\Forms\KategoriForm;
use App\Models\Kategori;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class KategoriTable extends Component
{
    use WithPagination;

    public KategoriForm $form;

    #[On('dispatch-kategori-create-save')]
    #[On('dispatch-kategori-create-edit')]
    #[On('dispatch-kategori-delete-hapus')]
    public function render()
    {
        // return view('livewire.kategori.kategori-table', [
        //     'data' => Kategori::where('id', 'like', '%'.$this->form->id.'%')
        //         ->where('nama', 'like', '%'.$this->form->nama.'%')
        //         ->orderby($this->sortBy, $this->sortDirection)
        //         ->paginate($this->paginate),
        // ]);

        return view('livewire.kategori.kategori-table');
    }
}
