<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $datas = DB::table('transactions')
            ->join('users', 'users.username', '=', 'transactions.username')
            ->join('wisatas', 'wisatas.nama_wisata', '=', 'transactions.nama_wisata')
            ->select('transactions.*', 'wisatas.harga_tiket', 'wisatas.alamat');
        if(request('search')){
            $datas->where('users.username', 'like', '%' . request('search') . '%')
            ->orWhere('wisatas.nama_wisata', 'like', '%' . request('search') . '%');
        }
        $datas = $datas->get();
        $count = $datas->count();
        return view('transaksi', compact('datas', 'count'));
    }
}
