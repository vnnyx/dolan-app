<?php

namespace App\Http\Controllers\Api;

use App\Helper\Visitor;
use App\Helper\WebResponse;
use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\FavoriteDestination;
use App\Models\Transaction;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    public function wisataPopuler(): JsonResponse
    {
        $result = Content::query()
            ->join('wisatas', 'wisatas.username', '=', 'contents.username')
            ->join('transactions', 'transactions.nama_wisata', '=', 'wisatas.nama_wisata')
            ->select(['wisatas.*', 'contents.content'])
            ->groupBy('contents.username')
            ->orderByRaw('sum(total_ticket) desc')
            ->get();

        return $this->wisataResponse($result);
    }

    public function wisataBaru(): JsonResponse
    {
        $result = Content::query()
            ->join('wisatas', 'wisatas.username', '=', 'contents.username')
            ->select(['wisatas.*', 'contents.content'])
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

        $detail = Wisata::query()
            ->leftJoin('transactions', 'wisatas.nama_wisata', '=', 'transactions.nama_wisata')
            ->where('wisatas.id', '=', $id)
            ->selectRaw('wisatas.*, sum(total_ticket) as total')
            ->first();
        if ($detail == null) {
            return WebResponse::webResponse(400, 'BAD_REQUEST', null, "Wisata tidak ditemukan");
        }

        $is_favorite = FavoriteDestination::query()
            ->where('nama_wisata', '=', $detail['nama_wisata'])
            ->where('username', '=', auth('api')->payload()->get('username'))->get()->count();
        if ($is_favorite == 1) {
            $is_favorite = true;
        } else {
            $is_favorite = false;
        }

        $data_content = [];
        foreach ($contents as $content) {
            $data_content[] = $content->content;
        }
        $data = [
            'destination_id' => $detail['id'],
            'destination_name' => $detail['nama_wisata'],
            'location' => $detail['alamat'],
            'price' => $detail['harga_tiket'],
            'description' => $detail['deskripsi'],
            'open' => $detail['open'],
            'close' => $detail['close'],
            'visitor' => $detail['total'] == null ? "0" : Visitor::convertVisitor($detail['total']),
            'content' => $data_content,
            'is_favorite' => $is_favorite,
            'latitude' => $detail['latitude'],
            'longitude' => $detail['longitude']
        ];

        return WebResponse::webResponse(200, 'OK', $data);
    }

    public function cariWisata(Request $request): JsonResponse
    {
        $search = $request->query('search');
        if ($search == null) {
            return WebResponse::webResponse(400, 'BAD_REQUEST', $search, 'Query tidak ditemukan');
        }
        $result = Content::query()
            ->join('wisatas', 'wisatas.username', '=', 'contents.username')
            ->select(['wisatas.*', 'contents.content'])
            ->groupBy('contents.username')
            ->where('wisatas.nama_wisata', 'LIKE', "%$search%")
            ->orWhere('wisatas.alamat', 'LIKE', "%$search%")
            ->get();

        return $this->wisataResponse($result);
    }

    public function addWisataFavorite($id): JsonResponse
    {
        $result = Wisata::find($id);
        $check = FavoriteDestination::query()
            ->where('username', '=', auth('api')->payload()->get('username'))
            ->where('nama_wisata', '=', $result['nama_wisata'])
            ->count();
        if ($check != 0) {
            return WebResponse::webResponse(200, 'OK');
        }
        FavoriteDestination::create([
            'username' => auth('api')->payload()->get('username'),
            'nama_wisata' => $result['nama_wisata']
        ]);

        return WebResponse::webResponse(200, 'OK');
    }

    public function deleteWisataFavorite($id): JsonResponse
    {
        $wisata = Wisata::query()->find($id)->nama_wisata;
        $response = FavoriteDestination::query()
            ->where('nama_wisata', '=', $wisata)
            ->where('username', '=', auth('api')->payload()->get('username'))
            ->delete();
        if ($response == 0) {
            return WebResponse::webResponse(401, 'BAD_REQUEST');
        }
        return WebResponse::webResponse(200, 'OK');
    }

    public function listWisataFavorite(): JsonResponse
    {
        $result = FavoriteDestination::query()
            ->join('wisatas', 'wisatas.nama_wisata', '=', 'favorite_destinations.nama_wisata')
            ->join('contents', 'contents.nama_wisata', '=', 'wisatas.nama_wisata')
            ->select(['wisatas.*', 'contents.content'])
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
            $is_favorite = FavoriteDestination::query()
                ->where('nama_wisata', '=', $result[$i]['nama_wisata'])
                ->where('username', '=', auth('api')->payload()->get('username'))->get()->count();
            if ($is_favorite == 1) {
                $is_favorite = true;
            } else {
                $is_favorite = false;
            }
            $total = Transaction::query()
                ->selectRaw('sum(total_ticket) as total')
                ->where('nama_wisata', '=', $result[$i]['nama_wisata'])->value('total');
            $data[] = [
                'destination_id' => $result[$i]['id'],
                'destination_name' => $result[$i]['nama_wisata'],
                'location' => $result[$i]['alamat'],
                'price' => $result[$i]['harga_tiket'],
                'description' => $result[$i]['deskripsi'],
                'open' => $result[$i]['open'],
                'close' => $result[$i]['close'],
                'visitor' => $total == null ? "0" : Visitor::convertVisitor($total),
                'content' => $result[$i]['content'],
                'is_favorite' => $is_favorite,
                'latitude' => $result[$i]['latitude'],
                'longitude' => $result[$i]['longitude']
            ];
        }
        return WebResponse::webResponse(200, 'OK', $data);
    }

}
