<?php

namespace App\Livewire\Kategori;

use App\Models\Kategori;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class KategoriHapus extends Component
{
    #[Locked]
    public $id;

    #[Locked]
    public $nama;

    public $modalKategoriHapus = false;

    #[On('dispatch-kategori-table-hapus')]
    public function set_kategori($id, $nama)
    {
        $this->id = $id;
        $this->nama = $nama;

        $this->modalKategoriHapus = true;
    }

    public function hapus()
    {
        $hapus = Kategori::destroy($this->id);

        ($hapus) ? $this->dispatch('notifity', title: 'success', message: 'Selamat anda berhasil Dihapus')
        : $this->dispatch('notifity', title: 'failed', message: 'Selamat anda berhasil');
        $this->modalKategoriHapus = false;
        $this->dispatch('dispatch-kategori-table-hapus')->to(KategoriTable::class);
    }

    public function render()
    {
        return view('livewire.kategori.kategori-hapus');
    }
}
