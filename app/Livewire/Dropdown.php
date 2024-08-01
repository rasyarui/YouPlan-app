<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class Dropdown extends Component
{
    public $activity;

    public function edit($id){
        $data = Todo::find($id);
        

        $this->activity = $data->activity;
    }

    
    
    public function render()
    {

        return view('livewire.dropdown');
    }
}
