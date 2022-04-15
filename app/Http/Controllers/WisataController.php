<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class WisataController extends Controller
{
    public function index()
    {
        $content = Content::query()->where('username', '=', auth()->user()->username)->get();
        return view('wisata', compact('content'));
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            if ($request->fileContent->extension() != 'jpg' && $request->fileContent->extension() != 'png' && $request->fileContent->extension() != 'jpeg') {
                alert()->error('Oops', 'Format file harus .png atau .jpg');
            } else {
                $result = $request->fileContent->storeOnCloudinaryAs('abp', $request->fileName);
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

    public function delete(Request $request, $id)
    {
        Content::destroy($id);
        Alert::toast('Banner berhasil dihapus', 'success');
        return redirect('/pengelola/wisata');
    }
}
