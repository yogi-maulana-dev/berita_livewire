<?php

namespace App\Livewire\Berita;

use App\Livewire\Forms\Berita\BeritaForm;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class BeritaCreate extends Component
{
    use WithFileUploads;

    public BeritaForm $form;

    public $modalBeritaCreate = false;

    public $kategori = []; // Untuk memuat daftar kategori

    public $search = ''; // Add this property for search

    public $isLoading = false;

    public function mount()
    {
        // Muat daftar kategori
        $this->kategori = Kategori::all();
    }

    public function searchKategori($query)
    {
        return Kategori::where('nama', 'like', "%{$query}%")
            ->limit(10)
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'nama' => $item->nama,
                ];
            });
    }

    public function updatedFormJudul($value)
    {
        // Ubah judul menjadi slug menggunakan helper Laravel
        $this->form->slug = Str::slug($value);

    }

    public function save()
    {
        $this->validate();

        $simpan = $this->form->store();

        if (is_null($simpan)) {
            $this->dispatch('notifity', title: 'success', message: 'Selamat anda berhasil');
        } else {
            $this->dispatch('notifity', title: 'failed', message: 'Selamat anda gagal');
        }

        $this->dispatch('set-reset');

        $this->dispatch('dispatch-berita-create-save')->to(BeritaTable::class);
    }

    public function KatChange()
    {
        $this->dispatch('set-kategori-create', id: $this->form->type, data: $this->form->setType());
        $this->resetErrorBag();
    }

    // public function resetForm()
    // {
    //     $this->reset([
    //         'judul',
    //         'slug',
    //         'konten',
    //         'kategori_id',
    //         'gambar',
    //     ]);
    //     // $this->gambarPertanyaanPreview = null;
    // }

    public function render()
    {

        // $this->dispatch('set-kategori-create', id: $this->form->type, data: $this->form->setKategori());
        $this->dispatch('set-kategori-create', data: $this->form->setKategori());

        $filteredKategori = Kategori::when($this->search, function ($query) {
            return $query->where('nama', 'like', '%'.$this->search.'%');
        })->get();

        return view('livewire.berita.berita-create');
    }
}
//
