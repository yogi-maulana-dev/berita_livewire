<?php

namespace App\Livewire\Forms\Kategori;

use App\Models\Kategori;
use Livewire\Attributes\Rule;
use Livewire\Form;

class KategoriForm extends Form
{
    //

    public ?Kategori $kategori;

    #[Rule('required|min:3')]
    public $nama;

    public $id;

    // public function setKategori(Kategori $kategori)
    // {
    //     $this->kategori = $kategori;
    //     $this->nama = $kategori->nama;
    // }

    public function setKategori(Kategori $kategori)
    {
        $this->Kategori = $kategori;
        $this->nama = $kategori->nama;

    }

    public function store()
    {
        Kategori::create($this->except('kategori'));
        $this->reset();
    }

    public function update()
    {
        $this->kategori->update($this->except('kategori'));
    }
}
