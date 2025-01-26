<?php

namespace App\Livewire\Forms\SubKategori;

use App\Models\SubKategori;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SubKategoriForm extends Form
{
    //
    public ?SubKategori $subkategori;

    #[Rule('required')]
    public $nama_sub;
    public $kategori_id;
    public $urut;

    public $id;

    public function setSubKategori(SubKategori $subkategori)
    {
        $this->SubKategori = $subkategori;
        $this->nama = $subkategori->nama;
        $this->kategori_id = $subkategori->kategori_id;

    }

    public function store()
    {
        SubKategori::create($this->except('subkategori'));
        $this->reset();
    }

    public function update()
    {
        $this->subkategori->update($this->except('subkategori'));
    }
}