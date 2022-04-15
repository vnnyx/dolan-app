<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminContentController extends Controller
{
    public function register()
    {
        return view('daftar');
    }

    public function createContent()
    {
        $content = Content::query()
            ->join('users', 'users.username', '=', 'contents.username')
            ->where('advertisement', '=', 0)
            ->where('role', '=', 'admin')
            ->select('contents.*')->get();
        $ads = Content::query()
            ->join('users', 'users.username', '=', 'contents.username')
            ->where('advertisement', '=', 1)
            ->where('role', '=', 'admin')
            ->select('contents.*')->get();

        return view('banner', compact('content', 'ads'));
    }

    public function storeContent(Request $request)
    {
        if ($request->ajax()) {
            if($request->fileContent){
                if ($request->fileContent->extension() != 'jpg' && $request->fileContent->extension() != 'png' && $request->fileContent->extension() != 'jpeg') {
                    alert()->error('Oops', 'Format file harus .png atau .jpg');
                }else{
                    $content = $request->fileContent->storeOnCloudinaryAs('abp', $request->fileName);
                    $path = $content->getSecurePath();
                    Content::create([
                        'username' => auth()->user()->username,
                        'content' => $path,
                    ]);
                    Alert::toast('Banner berhasil ditambahkan', 'success');
                }
            } else {
                if ($request->fileAds->extension() != 'jpg' && $request->fileAds->extension() != 'png' && $request->fileAds->extension() != 'jpeg') {
                    alert()->error('Oops', 'Format file harus .png atau .jpg');
                }else{
                    $advertisement = $request->fileAds->storeOnCloudinaryAs('abp', $request->fileName);
                    $path = $advertisement->getSecurePath();
                    Content::create([
                        'username' => auth()->user()->username,
                        'content' => $path,
                        'advertisement' => 1,
                    ]);
                    Alert::toast('Banner berhasil ditambahkan', 'success');
                }
            }
        }
    }

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            if ($request->updateContent) {
                if ($request->updateContent->extension() != 'jpg' && $request->updateContent->extension() != 'png' && $request->updateContent->extension() != 'jpeg') {
                    alert()->error('Oops...', 'Format file harus .png atau .jpg');
                }else{
                    $content = $request->updateContent->storeOnCloudinaryAs('abp', $request->fileName);
                    $path = $content->getSecurePath();
                    $data = Content::find($id);
                    if($data){
                        $data->update([
                            'username' => auth()->user()->username,
                            'content' => $path,
                        ]);
                        Alert::toast('Banner berhasil diubah', 'success');
                    }else{
                        Alert::toast('Banner gagal diubah', 'error');
                    }
                }
            } else {
                if ($request->updateAds->extension() != 'jpg' && $request->updateAds->extension() != 'png' && $request->updateAds->extension() != 'jpeg') {
                    alert()->error('Oops...', 'Format file harus .png atau .jpg');
                }else{
                    $advertisement = $request->updateAds->storeOnCloudinaryAs('abp', $request->fileName);
                    $path = $advertisement->getSecurePath();
                    $data = Content::find($id);
                    if($data){
                        $data->update([
                            'username' => auth()->user()->username,
                            'content' => $path,
                            'advertisement' => 1,
                        ]);
                        Alert::toast('Banner berhasil diubah', 'success');
                    }else{
                        Alert::toast('Banner gagal diubah', 'error');
                    }
                }
            }
        }
    }

    public function delete($id)
    {
        $data = Content::destroy($id);
        if($data){
            Alert::toast('Banner berhasil dihapus', 'success');
        }else{
            Alert::toast('Banner gagal dihapus', 'error');
        }
        return redirect("/admin/content");
    }
}
