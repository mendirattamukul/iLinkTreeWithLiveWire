<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Rule; 
use App\Models\Link;

class AddLinkForm extends Component
{
    #[Rule("required")]
    public $title="";
    #[Rule("required|url:http,https")]
    public $url="";
    #[Rule("required")]
    public $category_id="";
    public function render()
    {
        return view('livewire.add-link-form',['categories'=>Category::all()]);
    }
    public function addLink()
    {
       $this->validate();
        
            Link::create(
                [
                    "title"=>$this->title,
                    "url"=>$this->url,
                    "category_id"=>$this->category_id,
                    "user_id"=>request()->user()->id
                ]);
            
                $this->reset();
                request()->session()->flash("success","Link Added Successfully");
                $this->dispatch('link-added');
    }
}
