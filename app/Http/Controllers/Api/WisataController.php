<?php

namespace App\Http\Controllers\Api;

use App\Helper\WebResponse;
use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\FavoriteDestination;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Contracts\JWTSubject;

class WisataController extends Controller
{
    public function wisataPopuler(): JsonResponse
    {
        $result = Content::query()
            ->join('wisatas', 'wisatas.username', '=', 'contents.username')
            ->join('transactions', 'transactions.nama_wisata', '=', 'wisatas.nama_wisata')
            ->select(['wisatas.deskripsi', 'wisatas.id', 'wisatas.nama_wisata', 'contents.content', 'wisatas.alamat'])
            ->groupBy('contents.username')
            ->orderByRaw('sum(total_ticket) desc')
            ->get();

        return $this->wisataResponse($result);
    }

    public function wisataBaru(): JsonResponse
    {
        $result = Content::query()
            ->join('wisatas', 'wisatas.username', '=', 'contents.username')
            ->select(['wisatas.deskripsi', 'wisatas.id', 'wisatas.nama_wisata', 'contents.content', 'wisatas.alamat'])
            ->groupBy('contents.username')
            ->orderBy('wisatas.created_at', 'desc')
            ->get();

        return $this->wisataResponse($result);
    }

    public function detailWisata($id): JsonResponse
    {
        $contents = DB::table('contents')
            ->join('wisatas', 'wisatas.username', '=', 'contents.username')
            ->select('content')
            ->where('wisatas.id', '=', $id)
            ->get();

        $detail = Wisata::find($id);

        $data_content = [];
        foreach ($contents as $content) {
            $data_content[] = $content->content;
        }
        $data = [
            'destination_id' => $detail['id'],
            'destination_name' => $detail['nama_wisata'],
            'location' => $detail['alamat'],
            'description' => $detail['deskripsi'],
            'content' => $data_content
        ];
        return WebResponse::webResponse(200, 'OK', $data);
    }

    public function cariWisata(Request $request): JsonResponse
    {
        $search = $request->input('search');
        $result = Content::query()
            ->join('wisatas', 'wisatas.username', '=', 'contents.username')
            ->select(['wisatas.deskripsi', 'wisatas.id', 'wisatas.nama_wisata', 'contents.content', 'wisatas.alamat'])
            ->groupBy('contents.username')
            ->where('wisatas.nama_wisata', 'LIKE', "%$search%")
            ->orWhere('wisatas.alamat', 'LIKE', "%$search%")
            ->get();

        return $this->wisataResponse($result);
    }

    public function addWisataFavorite($id): JsonResponse
    {
        $result = Wisata::find($id);
        FavoriteDestination::create([
            'username' => auth('api')->payload()->get('username'),
            'nama_wisata' => $result['nama_wisata']
        ]);

        return WebResponse::webResponse(200, 'OK');
    }

    public function deleteWisataFavorite($id): JsonResponse
    {
        FavoriteDestination::destroy($id);
        return WebResponse::webResponse(200, 'OK');
    }

    public function listWisataFavorite(): JsonResponse
    {
        $result = FavoriteDestination::query()
            ->join('wisatas', 'wisatas.nama_wisata', '=', 'favorite_destinations.nama_wisata')
            ->join('contents', 'contents.nama_wisata', '=', 'wisatas.nama_wisata')
            ->select(['wisatas.id', 'wisatas.nama_wisata', 'contents.content', 'wisatas.alamat', 'wisatas.deskripsi'])
            ->where('favorite_destinations.username', '=', auth('api')->payload()->get('username'))
            ->groupBy('favorite_destinations.nama_wisata')
            ->orderBy('favorite_destinations.created_at', 'desc')
            ->get();

        return $this->wisataResponse($result);
    }

    private function wisataResponse(Collection $result): JsonResponse
    {
        $data = [];
        for ($i = 0; $i < sizeof($result); $i++) {
            $data[] = [
                'destination_id' => $result[$i]['id'],
                'destination_name' => $result[$i]['nama_wisata'],
                'location' => $result[$i]['alamat'],
                'description' => $result[$i]['deskripsi'],
                'content' => $result[$i]['content']
            ];
        }
        return WebResponse::webResponse(200, 'OK', $data);
    }

}
