<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function showAllNotes(){
        $notes = Note::orderBy('updated_at', 'desc')->get();
        return view('home', ['notes' => $notes]);
    }

    public function create(){
        return view('create-page');
    }

    public function createPost(Request $request){
        $validateNote = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'note' => 'required',
        ]);

        Note::create($validateNote);
        return redirect()->route('home');
    }
}
