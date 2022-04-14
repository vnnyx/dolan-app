<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;

class RegisController extends Controller
{

    public function index(){
        return view('register');
    }

    public function store(Request $request){
        $field = $request->validate([
            'username'=>'required',
            'email'=>'required',
            'password'=>'required',
            'namawisata'=> 'required',
            'alamatwisata'=>'required',
//            'filename'=>'required'
        ]);

//        $fileName = time().'.'.$field['filename']->extension();
//        $field['filename']->move(public_path('uploads'), $fileName);

        User::create([
            'username'=> $field['username'],
            'email'=>$field['email'],
            'password'=>bcrypt($field['password']),
            'role'=>'owner'
        ]);

        Wisata::create([
            'username'=> $field['username'],
            'nama_wisata'=>$field['namawisata'],
            'alamat'=>$field['alamatwisata'],
            'credential'=>"asd",
        ]);
        return redirect('/login');
    }
}
