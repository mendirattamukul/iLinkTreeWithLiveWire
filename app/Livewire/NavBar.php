<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class NavBar extends Component
{
    
    public function render()
    {
 
      
        return view('livewire.nav-bar',['ProfileInitial'=> Str::upper(request()->user()->name[0])]);
    }
    public function logout(): void
    {
        auth()->guard('web')->logout();

        session()->invalidate();
        session()->regenerateToken();

        $this->redirect('/', navigate: true);
    }
}
