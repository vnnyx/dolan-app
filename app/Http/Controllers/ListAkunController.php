<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ListAkunController extends Controller
{
    public function list(Request $request)
    {
        $totalData = User::query()->where('role', '!=', 'admin');
        $datas = User::query()->where('role', '!=', 'admin');

        if (!is_null($request->term)) {
            $datas->Where("username", "LIKE", "%{$request->term}%");
            $totalData->Where("username", "LIKE", "%{$request->term}%");
        }
        if (!is_null($request->role) && $request->role != "semua") {
            $datas->Where("role", "=", "$request->role");
            $totalData->Where("role", "=", "$request->role");
        }
        session(['roleOption' => $request->role]);

        $datas = $datas->get();
        $totalData = $totalData->count();

        return view('list-akun', compact('datas', 'totalData'));
    }

    public function blokir($id)
    {
        $data = User::find($id);

        if ($data) {
            $data->update([
                'is_blocked' => 1
            ]);
            Alert::toast('Akun berhasil diblokir', 'success');
        } else {
            Alert::toast('Akun gagal diblokir', 'error');
        }

        return redirect()->back();
    }

    public function unblokir($id)
    {
        $data = User::find($id);

        if ($data) {
            $data->update([
                'is_blocked' => 0
            ]);
            Alert::toast('Akun berhasil dibuka blokir ', 'success');
        } else {
            Alert::toast('Akun gagal dibuka blokir', 'error');
        }

        return redirect()->back();
    }
}
