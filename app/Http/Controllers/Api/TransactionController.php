<?php

namespace App\Http\Controllers\Api;

use App\Helper\WebResponse;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Wisata;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function listHistoryTicket(): JsonResponse
    {
        $result = Transaction::query()
            ->join('wisatas', 'transactions.nama_wisata', '=', 'wisatas.nama_wisata')
            ->select(['transactions.*', 'wisatas.alamat'])
            ->where('transactions.username', '=', auth('api')->payload()->get('username'))
            ->orderBy('created_at', 'desc')
            ->get();
        return $this->tiketResponse($result);
    }

    public function order(Request $request): JsonResponse
    {
        $validate = Validator::Make($request->all(), [
            'total_amount' => 'required',
            'destination_id' => 'required',
        ]);
        if ($validate->fails()){
            return WebResponse::webResponse(400, 'BAD_REQUEST', null, $validate->errors()->first());
        }
        $path = $request->proof_of_payment->storeOnCloudinary('abp')->getSecurePath();
        $nama_wisata = Wisata::query()->select('nama_wisata')
            ->where('id', '=', $request->input('destination_id'))->value('nama_wisata');
        Transaction::create([
            'username' => auth('api')->payload()->get('username'),
            'nama_wisata' => $nama_wisata,
            'total_ticket' => $request->input('total_amount'),
            'bukti_pembayaran' => $path
        ]);

        return WebResponse::webResponse(200, "OK");
    }

    private function tiketResponse(Collection $result): JsonResponse
    {
        Carbon::setLocale('id');
        $data = [];
        for ($i = 0; $i < sizeof($result); $i++) {
            $status = match ($result[$i]['status']) {
                0 => "Menunggu",
                1 => "Aktif",
                default => "Kadaluarsa",
            };
            $data[] = [
                'ticket_id' => $result[$i]['id'],
                'destination_name' => $result[$i]['nama_wisata'],
                'location' => $result[$i]['alamat'],
                'date' => $result[$i]['created_at']->isoFormat('dddd, D MMMM Y'),
                'status' => $status,
                'barcode' => Str::random(),
            ];
        }
        return WebResponse::webResponse(200, 'OK', $data);
    }
}
