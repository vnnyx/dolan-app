<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Wisata;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class WisataController extends Controller
{
    public function index()
    {
        $content = Content::query()->where('username', '=', auth()->user()->username)->get();
        $wisata = Wisata::query()->where('username', '=', auth()->user()->username)->get();
        return view('wisata', compact('content', 'wisata'));
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            if ($request->fileContent->extension() != 'jpg' && $request->fileContent->extension() != 'png' && $request->fileContent->extension() != 'jpeg') {
                alert()->error('Oops...', 'Format file harus .png atau .jpg')->autoClose(0);
            } else {
                $result = $request->fileContent->storeOnCloudinaryAs('abp/destination', $request->fileName);
                Content::create([
                    'username' => auth()->user()->username,
                    'content' => $result->getSecurePath(),
                ]);
                toast('Banner berhasil ditambahkan', 'success');
            }
        }
    }

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            $result = $request->updateContent->storeOnCloudinaryAs('abp', $request->fileName);
            $path = $result->getSecurePath();
            $data = Content::find($id);
            $data->update([
                'username' => auth()->user()->username,
                'content' => $path
            ]);
        }

        Alert::toast('Banner berhasil diupdate', 'success');
    }

    public function delete($id)
    {
        Content::destroy($id);
        Alert::toast('Banner berhasil dihapus', 'success');
        return redirect('/pengelola/wisata');
    }

    public function updateData(Request $request){
        $field = $request->validate([
            'stock_tiket'=>'integer',
            'harga_tiket' => 'integer',
            'deskripsi' => 'string'
        ]);
        $data = Wisata::where('username', '=', auth()->user()->username);
        $data->update([
            'stock_tiket' => $field['stock_tiket'],
            'deskripsi' => $field['deskripsi'],
            'harga_tiket' => $field['harga_tiket']
        ]);

        return redirect('/pengelola/wisata')->withToastSuccess('Berhasil merubah data wisata');
    }
}
