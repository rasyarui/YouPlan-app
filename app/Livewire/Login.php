<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class Login extends Component
{
    public $username, $password , $remember;
    public function render()
    {
        return view('livewire.login');
    }

    protected $rules = [
        'username' => ['', 'max:225'], 
        'password' => ['' ,'min:8'],
    ];


    public function updated($properyName){
        $this->validateOnly($properyName);
    }
    public function loginUser(){
        $this->validate();

        if(!Auth::attempt($this->only(['username', 'password']), $this->remember)){
            $this->addError('username',__('
            Username & Password doesnt match') );
            return null;
        } 

        return redirect('/todo');
    }

}
