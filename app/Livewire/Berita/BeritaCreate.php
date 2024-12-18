<?php

namespace App\Livewire\Berita;

use App\Livewire\Forms\Berita\BeritaForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class BeritaCreate extends Component
{
    use WithFileUploads;

    public $gambarPertanyaanPreview;

    public $diskusiGambarPreview;

    public BeritaForm $form;

    public $modalBeritaCreate = false;

    public function updatedFormGambarBerita()
    {
        if ($this->form->gambar_berita) {
            $this->gambarPertanyaanPreview = $this->form->gambar_berita->temporaryUrl();
        }
    }

    // public function updatedFormDiskusiGambar()
    // {
    //     if ($this->form->diskusi_gambar) {
    //         $this->diskusiGambarPreview = $this->form->diskusi_gambar->temporaryUrl();
    //     }
    // }

    public function save()
    {
        $this->validate();

        $simpan = $this->form->store();

        if (is_null($simpan)) {
            $this->dispatch('notifity', title: 'success', message: 'Selamat anda berhasil');
        } else {
            $this->dispatch('notifity', title: 'failed', message: 'Selamat anda gagal');
        }

        $this->dispatch('dispatch-berita-create-save')->to(BeritaTable::class);
    }

    public function render()
    {
        return view('livewire.berita.berita-create');
    }
}
