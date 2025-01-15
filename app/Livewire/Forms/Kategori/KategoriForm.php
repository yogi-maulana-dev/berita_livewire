<?php

namespace App\Livewire\Forms\Kategori;

use Livewire\Form;
use App\Models\Kategori;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class KategoriForm extends Form
{
    //

    public ?Kategori $kategori;
    #[Rule('required|min:3')]
    public $name;
    public $id;

    public function setKategori(Kategori $kategori)
    {
        $this->kategori=$kategori;
        $this->name =$kategori->name;
    }

    public function store(){
        Kategori::create($this->except('kategori'));
        $this->reset();
    }
    public function update(){
        $this->kategori->update($this->except('kategori'));
    }

}
