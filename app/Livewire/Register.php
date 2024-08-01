<?php

namespace App\Livewire;
use App\Models\Todo;
use App\Models\User;
use Livewire\Component;

class Register extends Component
{




    public $name;
    public $username;
    public $email;
    public $password;
    public $password_confirmation;
    public function render()
    {
        return view('livewire.register');
    }

    protected $rules = [
        'name' => ['required', 'max:225'],
        'username' => ['required', 'max:225'], 
        'email' => ['', 'email', 'unique:users'],
        'password' => ['' ,'min:8', 'confirmed'],
        // 'password_confirmation' => ['' ,'min:8', 'confirmed'],
    ];


    public function updated($properyName){
        $this->validateOnly($properyName);
    }
    public function store(){

        $this->validate();

             User::create([
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'password_confirmation' => bcrypt($this->password_confirmation)
        ]);

        return redirect('/login');


    }
}
