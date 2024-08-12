<?php

namespace App\Livewire\Note;

use App\Models\Note;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Lock extends Component
{

    public $password;

    public $passwordLock ;

    public $updateData = false;



    public $note_id;
    public function render()
    {
        $datas = Note::whereUserId(auth()->user()->id)->orderBy('updated_at', 'desc')->get();


        return view('livewire.note.lock', [
            'datas' => $datas,

        ]);
    }



    public function edit2($id)
    {
        $data = Note::find($id);


        $this->passwordLock = $data->password;

        
        $this->note_id = $id;
        $this->updateData = true;
    }
    

    public function lock()
    {

        // $data = Note::find($id);
        $data = Note::find($this->note_id);


        if ($data) {
            $data->update(['password' => Hash::make($this->passwordLock)]);
            return redirect('/note')->with('successD', 'The note has been successfully locked
            ');
        }else{
            dd("gagal");
        }

   
    }
}
