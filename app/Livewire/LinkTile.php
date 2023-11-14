<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Link;

class LinkTile extends Component
{
    public $link;
    public $isActive=false;
    public function render()
    {
        $this->isActive=$this->link->isActive;
        return view('livewire.link-tile');
    }

    public function deleteLink()
    {
       Link::find($this->link->id)->delete();
       $this->dispatch('link-added');

    }
    public function onToggleButtonClick()
    {
   
        Link::find($this->link->id)->update(['isActive'=>$this->isActive]);
       
        $this->dispatch('link-added');
    
        
    }



}
