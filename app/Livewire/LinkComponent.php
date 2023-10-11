<?php

namespace App\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Link;
use App\Models\User;
class LinkComponent extends Component
{
    
    #[On('link-added')]
    public function render()
    {
      

        if(auth()->check())
        {
            $links=Link::where("user_id", request()->user()->id)->paginate(4);
            $username= request()->user()->name;
            return view('livewire.link-component',['links'=>$links,  'username'=>$username])->layout('layouts.app');
        }
        else
        {
          
            $user= User::firstWhere('slug',request("slug"));
           
            if($user)
            {
               
                $links=Link::where("user_id",$user->id)->paginate(4);
                $username= $user->name;
                return view('livewire.link-component',['links'=>$links,  'username'=>$username])->layout('layouts.guest');
            }
            
        }
        return abort(404, 'Not found');

    
    }
}
