<?php

namespace App\Livewire\Kategori;

use App\Livewire\Forms\Kategori\KategoriForm;
use App\Models\Kategori;
use Livewire\Attributes\On;
use Livewire\Component;

class KategoriEdit extends Component
{
    public KategoriForm $form;

    public $modalKategoriEdit = false;

    #[On('dispatch-kategori-table-edit')]
    public function set_kategori(Kategori $id)
    {
        $this->form->setKategori($id);
        $this->modalKategoriEdit = true;
    }

    public function edit()
    {
        $this->form->validate();
        $update = $this->form->update();

        is_null($update) ? $this->dispatch('notifity', title: 'success', message: 'Selamat anda berhasil') : $this->dispatch('notifity', title: 'failed', message: 'Selamat anda berhasil');
        $this->dispatch('dispatch-kategori-create-save')->to(KategoriTable::class);

    }

    public function render()
    {
        return view('livewire.kategori.kategori-edit');
    }
}
