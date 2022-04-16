<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionOwnerController extends Controller
{
    public function index()
    {
        $datas = DB::table('transactions')
            ->join('users', 'users.username', '=', 'transactions.username')
            ->join('wisatas', 'wisatas.nama_wisata', '=', 'transactions.nama_wisata')
            ->select('transactions.*')->where('transactions.status', '=', 0)
            ->where('wisatas.username', '=', auth()->user()->username);
        if(request('term')){
            $datas->where('users.username', 'like', '%' . request('term') . '%');
        }
        $datas = $datas->get();
        $count = $datas->count();
        return view('list-pengajuan', compact('datas', 'count'));
    }

    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);
        if ($request->input('action') == 'acc') {
            $transaction->update([
                'status' => 1
            ]);
            toast('Transaksi berhasil diterima', 'success');
        } else {
            $transaction->update([
                'status' => 2
            ]);
            toast('Transaksi berhasil ditolak', 'success');
        }
        return redirect('/pengelola/transaction');
    }
}
