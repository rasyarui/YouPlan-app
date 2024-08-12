<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar');
    }


    public function logout(){
        Auth::logout();

        return redirect('login');

        
    }
}
