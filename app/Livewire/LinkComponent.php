<?php

namespace App\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Link;
use App\Models\User;
use Livewire\Attributes\On; 
use Illuminate\Support\Str;
class LinkComponent extends Component
{
   
    #[On('link-added')]
    public function render()
    {

 

        if(auth()->check())
        {
         
            $links=Link::where("user_id", request()->user()->id)->where('isActive',1)->paginate(4);
            $username= request()->user()->name;
            return view('livewire.link-component',['links'=>$links,  'username'=>$username,'ProfileInitial'=>Str::upper($username[0])])->layout('layouts.link-page');
        }
        else
        {
          
            $user= User::firstWhere('slug',request("slug"));
           
            if($user)
            {
               
                $links=Link::where("user_id",$user->id)->where('isActive',1)->paginate(4);
                $username= $user->name;
                return view('livewire.link-component',['links'=>$links,  'username'=>$username,'ProfileInitial'=>Str::upper($username[0])])->layout('layouts.link-page');
            }
            
        }
        return abort(404, 'Not found');

    
    }
}
