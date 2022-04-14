<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index(){
        $content = Content::query()->where('username', '=', auth()->user()->username)->get();
        return view('wisata', compact('content'));
    }

    public function store(Request $request){
        if($request->ajax()){
            $result = $request->fileContent->storeOnCloudinaryAs('abp', $request->fileName);
            Content::create([
                'username'=>auth()->user()->username,
                'content'=>$result->getSecurePath(),
            ]);
        }
        toast('Banner berhasil ditambah ','success');
    }

    public function update(Request $request, $id){
        $data = Content::find($id);
        if($request->ajax()){
            $result = $request->fileContent->storeOnCloudinaryAs('abp', $request->fileName);
            $data->update([
                'username'=>auth()->user()->username,
                'content'=>$result->getSesurePath()
            ]);
        }

        toast('Banner berhasil diupdate', 'success');
    }
}
