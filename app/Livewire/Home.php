<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $data['main_menu'] = "Home";
        $data['sub_menu'] = "";
        return view('livewire.home', $data)->layout('components.layouts.app', ['title' => 'Home']);
    }
}