<?php

namespace App\Livewire\Note;

use Carbon\Carbon;
use App\Models\Note;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Rule;


class Index extends Component
{

    public $updateData = false;
    public $password;

    public $passwordLock;
    public $passwordUnlock = '';
    public $notes;
    public $note;
    public $note_id;



    public function render()
    {
        $datas = Note::whereUserId(auth()->user()->id)->orderBy('updated_at', 'desc')->get();


        return view('livewire.note.index', [
            'datas' => $datas,

        ]);
    }

    protected $rules = [
        'passwordLock' => ['required'],
        // 'passwordUnlock' => ['required'],
        // 'password_confirmation' => ['' ,'min:8', 'confirmed'],
    ];



    public function edit2($id)
    {

        $data = Note::find($id);


        $this->passwordLock = $data->password;


        $this->note_id = $id;

        $this->updateData = true;
    }


    public function lock()
    {



        // $data = Note::find($id);s
        $data = Note::find($this->note_id);

        if ($data) {
            $this->validate();


            $data->update(['password' => Hash::make($this->passwordLock)]);
            return redirect('/note')->with('successD', 'The note has been successfully locked.
            ');
        } else {
            dd("gagal");
        }
    }

    public function unlock($id)
    {



        $this->validate([
            'passwordUnlock' => 'required'
        ]);
        // $data = Note::find($id);
        $data = Note::whereId($id)->first();


        if ($data->user_id == auth()->user()->id) {
            if ($this->passwordUnlock) {
                if (Hash::check($this->passwordUnlock, $data->password)) {

                    try {

                        $data->update(['password' => null]);

                        return redirect('/note')->with('successD', 'The note has been successfully unlocked.
                        ');
                    } catch (\Throwable $err) {
                        dd("gagal");
                    }
                } else {
                    Session::flash('errorD', 'The password you entered is incorrect.');

                    return redirect('/note');

                    // dd("salah pw");
                }
            }
        } else {
            $this->dispatch('nyatetNotMine');
        }
    }


    public function delete()
    {
        // $data = Note::find($id);

        $data = Note::find($this->note_id);

        if ($data) {
            $data->delete();

            return redirect('/note')->with('successD', 'The note has been deleted
            ');
        } else {
            dd("gagal");
        }
    }
}
