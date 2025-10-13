<?php

namespace App\Livewire;

use App\Models\Menu;
use Livewire\Component;
use App\Models\MainMenu;

class Home extends Component
{
    public function render()
    {
        $data['main_menu'] = "Home";
        $data['sub_menu'] = "";
        return view('livewire.home', $data)->layout('components.layouts.app', ['title' => 'Home']);
    }
}