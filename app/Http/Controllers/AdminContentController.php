<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdminContentController extends Controller
{
    public function register()
    {
        return view('daftar');
    }

    public function createContent()
    {
        $content = DB::table('contents')->where('advertisement', '=', 0)->get();
        $ads = DB::table('contents')->where('advertisement', '=', 1)->get();

        return view('banner', compact('content', 'ads'));
    }

    public function storeContent(Request $request)
    {
        if ($request->ajax()) {
            if ($request->fileContent) {
                $content = $request->fileContent->storeOnCloudinaryAs('abp', $request->fileName);
                $path = $content->getSecurePath();
                Content::create([
                    'username' => auth()->user()->username,
                    'content' => $path,
                ]);
            } else {
                $advertisement = $request->fileAds->storeOnCloudinaryAs('abp', $request->fileName);
                $path = $advertisement->getSecurePath();
                Content::create([
                    'username' => auth()->user()->username,
                    'content' => $path,
                    'advertisement' => 1,
                ]);
            }
            Alert::toast('Banner berhasil ditambah', 'success');
        }
    }

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            if ($request->updateContent) {
                $content = $request->updateContent->storeOnCloudinaryAs('abp', $request->fileName);
                $path = $content->getSecurePath();
                $data = Content::find($id);
                $data->update([
                    'username' => auth()->user()->username,
                    'content' => $path,
                ]);
            } else {
                $advertisement = $request->updateAds->storeOnCloudinaryAs('abp', $request->fileName);
                $path = $advertisement->getSecurePath();
                $data = Content::find($id);
                $data->update([
                    'username' => auth()->user()->username,
                    'content' => $path,
                    'advertisement' => 1,
                ]);
            }
            Alert::toast('Banner berhasil diubah', 'success');
        }
    }

    public function delete($id)
    {
        Content::destroy($id);
        Alert::toast('Banner berhasil dihapus', 'success');
        return redirect("/admin/content");
    }
}
