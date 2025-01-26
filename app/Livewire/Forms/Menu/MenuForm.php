<?php

namespace App\Livewire\Forms\Menu;

use App\Models\Menu;
use Livewire\Form;
use Livewire\Attributes\Rule;

class MenuForm extends Form
{
    public ?Menu $menu;

    #[Rule('required')]
    public $nama_menu;
    #[Rule('required|min:3')]
    public $url;
    public $urut;

    public function setMenu(Menu $menu)
    {
        $this->Menu = $menu;
        $this->nama_menu = $menu->nama_menu;
        $this->url = $menu->url;
        $this->urut = $menu->urut;
    }

    public function store()
    {
        if (empty($this->urut)) {
            $this->urut = Menu::max('urut') + 1 ?? 1;
        }

        // Buat array data yang akan disimpan
        $data = [
            'nama_menu' => $this->nama_menu,
            'url' => $this->url,
            'urut' => $this->urut,
        ];

        Menu::create($data);
        $this->reset(['nama_menu', 'url', 'urut']);
    }

    public function update()
    {
        $this->validate();

        $this->menu->update($this->except('menu'));
    }
}
