<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengelolaDashboardController extends Controller
{
    public function index(){
        $query =  DB::table('transactions')
            ->join('users', 'users.username', '=', 'transactions.username')
            ->join('wisatas', 'wisatas.nama_wisata', '=', 'transactions.nama_wisata')
            ->select('wisatas.harga_tiket')->where('wisatas.username', '=', auth()->user()->username);
        $jumlahPengunjung = $query->where('status', 1)->get()->count();
        $totalTicket = $query->sum('total_ticket');
        $harga = $query->value('harga_tiket');
        $total = $harga * $totalTicket;
        return view('info-wisata', compact('total', 'jumlahPengunjung', 'totalTicket'));
    }
}
