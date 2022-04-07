<?php

namespace App\Http\Controllers\Api;

use App\Helper\WebResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;

class AdminDashboardController extends Controller
{
    public function index(){
        return WebResponse::webResponse(200, "OK", Note::all());
    }

    public function createNote(Request $request)
    {
        $field = $request->validate([
            'title' => 'required',
            'message' => 'required'
        ]);

        Note::create([
            'username'=> auth()->user()->username,
            'title' => $field['title'],
            'message' => $field['message']
        ]);

        return WebResponse::webResponse(200, 'OK');
    }

    public function updateNote(Request $request, $id){
        $note = Note::find($id);
        $note->update($request->all());
        return $note;
    }

    public function deleteNote($id)
    {
        return Note::destroy($id);
    }
}
