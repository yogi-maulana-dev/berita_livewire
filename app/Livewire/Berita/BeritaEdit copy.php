<?php

namespace App\Livewire\Berita;

use App\Livewire\Forms\Berita\BeritaForm;
use App\Models\Berita;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class BeritaEdit extends Component
{
    use WithFileUploads;

    public BeritaForm $form;

    public $id;

    public $konten;

    public $modalBeritaEdit = false;

    #[On('dispatch-berita-table-edit')]
    public function set_berita(Berita $id)
    {
        $this->form->setBerita($id);

        $this->dispatch('set-kategori-edit', id: $this->form->kategori_id, data: $this->form->setKategori());

        $this->modalBeritaEdit = true;
    }

    public function updateKonten($konten)
    {
        // Menyimpan konten ke dalam form
        $this->form->konten = $konten;
    }

    public function updatedFormJudul($value)
    {
        $this->form->slug = Str::slug($value);
    }

    public function edit()
    {

        $this->validate();

        $update = $this->form->update();

        if ($update) {
            $this->dispatch('notifity', title: 'success', message: 'Data berhasil diperbarui');
        } else {
            $this->dispatch('notifity', title: 'failed', message: 'Gagal memperbarui data');
        }

        $this->dispatch('dispatch-berita-create-edit')->to(BeritaTable::class);
    }

    public function render()
    {
        return view('livewire.berita.berita-edit');
    }
}
