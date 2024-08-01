<?php

namespace App\Livewire;

use App\Models\Todo;
use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;





class Profile extends Component
{
    public function render()
    {
        return view('livewire.profile');
    }

    public $userId, $name, $email, $username;

    public $prevName;
    public $prevEmail;


    public $updateData = false;


    // public $currentPassword;
    public string $current_password = '';
    public string $password = '';
    public string $password_confirmation = '';



    public function mount()
    {

        $this->userId = auth()->user()->id;

        $model = User::find($this->userId);
        $this->name = $model->name;
        $this->username = $model->username;
        $this->email = $model->email;




        $this->prevName = $model->name;
        $this->prevEmail = $model->email;

        // $user = Auth::user();
        // $this->name = $user->name;
        // $this->username = $user->username;
        // $this->email = $user->email;
    }

    protected $rules = [
        'name' => ['required', 'max:225'],
        'email' => ['', 'email'],


    ];


    public function updated($properyName)
    {
        $this->validateOnly($properyName);
    }

    public function clear()
    {
        $this->current_password = "";
        $this->password = "";
        $this->password_confirmation = "";

        $this->updateData = false;
    }

    public function logout(Request $request)
    {
        Auth::logout();



        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function destroy()
    {

        $data =  User::find($this->userId);


        $data->Todo()->delete();

        $data->delete();


        return redirect('/login');
    }

    public function changePassword()
    {


        $data = [];

        $data = array_merge($data, [
            'current_password' => $this->current_password,
            'password' => $this->password,

        ]);

        if (count($data)) {
            $this->validate(
                [
                    'password' => ['required', 'min:8', 'confirmed'],
                    'current_password' => ['required', 'string', 'current_password'],
                ]
            );
            User::find($this->userId)->update($data);
            $this->clear();


            return redirect()->back()->with('successPassword', 'Success change password');


            // $this->reset('current_password', 'password', 'password_confirmation');

        }
    }


    public function editUser()
    {

        $data = [];

        $data = array_merge($data, [
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,

        ]);

        if (count($data)) {
            $this->validate();
            User::find($this->userId)->update($data);
            return redirect()->back()->with('success', 'Success save data');
        }


        // $this->validate([
        //     'name' => 'required|min:5',
        //     'username' => 'required|min:5',
        //     'email' => 'required|email'
        // ]);
        // if ($this->id) {
        //     $record = User::find($this->id);
        //     $record->update([
        //         'name' => $this->name,
        //         'username' => $this->username,
        //         'email' => $this->email
        //     ]);
        // }
    }
}
