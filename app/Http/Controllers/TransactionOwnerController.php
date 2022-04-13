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
            ->select('transactions.*')->where('transactions.success', '=', 0)
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
        switch ($request->input('action')) {
            case 'tolak':
                $transaction->update([
                    'success' => 2
                ]);
                return redirect('/pengelola/transaction');
            case 'acc':
                $transaction->update([
                    'success' => 1
                ]);
                return redirect('/pengelola/transaction');
            default:
                return 0;
        }

    }
}
