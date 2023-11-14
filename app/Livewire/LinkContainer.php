<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Link;
use Livewire\Attributes\On; 
class LinkContainer extends Component
{
    #[On('link-added')]
    public function render()
    {
        $links=Link::where("user_id", request()->user()->id)->get();
    
        return view('livewire.link-container',['links'=> $links]);
    }
}
