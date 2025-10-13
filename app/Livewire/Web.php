<?php

namespace App\Livewire;

use App\Models\Menu;
use Livewire\Component;

class Web extends Component
{
    public function render()
    {   
        $getUri = request()->path();
        if($getUri != "/"){
            $slug = str_replace("/", "", $getUri);
            // dd($slug);
            $dataMenu = Menu::where('slug', $slug)->where('status', 1)->first();
            if($dataMenu){
                $data['main_menu'] = $dataMenu->mainMenu->name;
                $data['sub_menu'] = $dataMenu->name;
                $data['content_type'] = $dataMenu->content_type;
                return view('livewire.web', $data)->layout('components.layouts.app', ['title' => $dataMenu->name]);
            } else {
                return abort(404);
            }
        }
    }

}