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
            ->select('transactions.*', 'wisatas.harga_tiket', 'wisatas.alamat')
            ->get();
        $count = DB::table('transactions')->count();
        return view('transaksi', compact('datas', 'count'));
    }

    public function search(Request $request){
        $query = $request->get('query');
        $filterResult = User::where('username', 'LIKE', '%'. $query. '%')->get();
        return response()->json($filterResult);
    }
}
