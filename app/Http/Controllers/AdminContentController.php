<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
                $content = $request->fileContent->storeOnCloudinary('abp')->getSecurePath();
                Content::create([
                    'username' => auth()->user()->username,
                    'content' => $content,
                ]);
            } else {
                $advertisement = $request->fileAds->storeOnCloudinary('abp')->getSecurePath();
                Content::create([
                    'username' => auth()->user()->username,
                    'content' => $advertisement,
                    'advertisement' => 1
                ]);
            }
        }
    }

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            if ($request->updateContent) {
                $content = $request->updateContent->storeOnCloudinary('abp')->getSecurePath();
                $data = Content::find($id);
                $data->update([
                    'username' => auth()->user()->username,
                    'content' => $content,
                ]);
            } else {
                $advertisement = $request->updateAds->storeOnCloudinary('abp')->getSecurePath();
                $data = Content::find($id);
                $data->update([
                    'username' => auth()->user()->username,
                    'content' => $advertisement,
                    'advertisement' => 1
                ]);
            }
        }
    }

    public function delete($id){
        Content::destroy($id);
        return redirect('/admin/content');
    }
}
