<?php

namespace App\Livewire\Menu;

use App\Livewire\Forms\Menu\MenuForm;
use Livewire\Component; // Import Form class

class MenuCreate extends Component
{
    public MenuForm $form; // Definisikan form property

    public $modalMenuCreate = false;

    public function save()
    {
        $simpan = $this->form->store();

        is_null($simpan)
            ? $this->dispatch('notifity', 'success', message: 'Selamat anda berhasil')
            : $this->dispatch('notifity', title: 'failed', message: 'Anda gagal Input !');

        $this->dispatch('dispatch-menu-create-save')->to(MenuTable::class);
    }

    public function render()
    {
        return view('livewire.menu.menu-create');
    }
}
