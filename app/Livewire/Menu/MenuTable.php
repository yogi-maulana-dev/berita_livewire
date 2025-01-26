<?php

namespace App\Livewire\Menu;

use App\Livewire\Forms\Menu\MenuForm;
use App\Models\Menu;
use Livewire\Attributes\On;
use Livewire\Component;

class MenuTable extends Component
{
    public MenuForm $form;

    #[On('dispatch-menu-create-save')]
    #[On('dispatch-menu-table-edit')]
    #[On('dispatch-menu-table-hapus')]
    public function render()
    {
        return view('livewire.menu.menu-table', [
            'data' => Menu::all(),
        ]);
    }
}
