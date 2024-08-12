<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class NoteController extends Controller
{
    public $updateData = false;
  


    public $state = [];

    public function index()
    {

        return view('note.index');
    }
    public function create()
    {
        return view('note.add');
    }

    public function store(Request $request)
    {
        // dd($request);

        // sleep(2);
        $customMessages = [
            'required' => 'The note field is required.'
        ];

        $request->validate([
            'title' => 'nullable|string',
            'note' => 'required|string',
        ]);


        // $this->validate($rules, $customMessages);

        Note::create([
            'title' => $request->title,
            'slug' => $this->genRandom(10),
            'note' => $request->note,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('/note')->with('successD', 'Note added successfully');


        // $this->clear();
    }

    public function edit(Request $request, Note $note)
    {

        // dd($note);
        // $note->user_id == auth()->user()->id;

        return view('note.edit', [
            'data' => $note
        ]);
    }

    public function update(Request $request, Note $note)
    {
        $validatedData = $request->validate([
            'title' => ['nullable', 'string'],
            'note' => ['required', 'string'],
        ]);

        $note->update($validatedData);

        return redirect('/note')->with('successD', 'Note updated successfully');
    }

    




    public function genRandom($limit)
    {
        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    }
}
