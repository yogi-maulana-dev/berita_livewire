<?php

namespace App\Livewire\SubKategori;

use App\Livewire\Forms\SubKategori\SubKategoriForm;
use Livewire\Component;

class SubKategoriCreate extends Component
{
    public SubKategoriForm $form;

    public $modalSubKategoriCreate = false;

    public function save()
    {
        $this->validate();

        $simpan = $this->form->store();

        is_null($simpan) ? $this->dispatch('notifity', title: 'success', message: 'Selamat anda berhasil') : $this->dispatch('notifity', title: 'failed', message: 'Selamat anda berhasil');
        $this->dispatch('dispatch-subkategori-create-save')->to(SubKategoriTable::class);
    }
    public function render()
    {
        return view('livewire.sub-kategori.sub-kategori-create');
    }
}