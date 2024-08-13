<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;




class ForgotPassword extends Component
{
    public $email;
    public function render()
    {

        return view('livewire.forgot-password');
    }

 
    protected $rules = [
        'email' => ['required', 'email'],
        // 'password_confirmation' => ['' ,'min:8', 'confirmed'],
    ];


    public function updated($properyName)
    {
        $this->validateOnly($properyName);
    }
    
    public function resetPassword(Request $request)
    {
        $this->validate();
        $status = Password::sendResetLink(
            ['email' => $this->email]
        );

        return $status === Password::RESET_LINK_SENT
            ?  redirect('/forgot-password')->with(['status' => __($status)])

            // ? back()->with(['status' => __($status)])
            : back()->with(['errorStatus' => __($status)]);
    }
}
