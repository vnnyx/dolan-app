<?php

namespace App\Http\Controllers\Api;

use App\Helper\WebResponse;
use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class WisataController extends Controller
{
    public function wisataPopuler()
    {
        $data = DB::table('contents')
            ->join('wisatas', 'wisatas.username', '=', 'contents.username')
            ->join('transactions', 'transactions.nama_wisata', '=', 'wisatas.nama_wisata')
            ->select(['transactions.nama_wisata', 'contents.content'])
            ->groupBy('contents.username')
            ->orderByRaw('sum(total_ticket) desc')
            ->limit(4)
            ->get();
        return WebResponse::webResponse(200, 'OK', $data);
    }

    public function wisataBaru()
    {
        $data = DB::table('contents')
            ->join('wisatas', 'wisatas.username', '=', 'contents.username')
            ->select(['wisatas.nama_wisata', 'contents.content'])
            ->groupBy('contents.username')
            ->orderBy('wisatas.created_at', 'desc')
            ->limit(4)
            ->get();

        return WebResponse::webResponse(200, 'OK', $data);
    }

    public function detailWisata($id){
        $contents = DB::table('contents')
            ->join('wisatas', 'wisatas.username', '=', 'contents.username')
            ->select('content')
            ->where('wisatas.id', '=', $id)
            ->get();

        $detail = Wisata::find($id);

        $data_content = [];
        foreach ($contents as $content){
            $data_content[] = $content->content;
        }
        $data = [
            'wisata_id'=>$detail['id'],
            'deskripsi'=>$detail['deskripsi'],
            'content'=>$data_content
        ];
        return WebResponse::webResponse(200, 'OK', $data);
    }

}
