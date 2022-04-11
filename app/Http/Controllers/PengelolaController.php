<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaController extends Controller
{
    public function register(){
        return view('daftar');
    }

    public function createContent(){
        return view('banner');
    }

    public function storeContent(Request $request){
        if($request->ajax()){
            $request->file->storeOnCloudinary('abp');
        }
    }
}
