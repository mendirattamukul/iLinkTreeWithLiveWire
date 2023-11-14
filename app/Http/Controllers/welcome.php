<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Livewire\LinkComponent;
class welcome extends Controller
{
    public function index(Request $request)
    {
        if($request->slug!=null)
        {
            $linkcomponent=new LinkComponent();

           return App::call([$linkcomponent, '__invoke']);
        }
        else
        {
         return view('welcome');
        }

    }
}
