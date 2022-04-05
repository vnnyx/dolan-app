<?php

namespace App\Http\Controllers;

use App\Helper\WebResponse;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDashboard extends Controller
{
    public function index(){
        $count = DB::table('notes')->count();
        $note = Note::all();
        return view('dashboardadmin', compact('note','count'));
    }

    public function create(){
        return view('modal');
    }

    public function store(Request $request){
        $field = $request->validate([
            'title' => 'required',
            'message' => 'required'
        ]);

        $note = Note::create([
            'username'=> 'nindra',
            'title' => $field['title'],
            'message' => $field['message']
        ]);

        if ($note){
            return redirect()->route('admin.index')->with(['success'=>'New note has been create']);
        }else{
            return redirect()->back()->withInput()->with(['error'=>'some problem']);
        }
    }

    public function edit($id) {
        $note = Note::find($id);
        
        return redirect()->route('admin.index', compact('note'));
    }

    // public function edit(Request $request, $id){
    //     $note = Note::find($id);
    //     $note->update($request->all());
    //     return redirect()->route('admin.index');
    // }
}
