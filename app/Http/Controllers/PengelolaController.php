<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaController extends Controller
{
    public function register(){
        return view('daftar');
    }

    public function create(Request $request){

    }
}
