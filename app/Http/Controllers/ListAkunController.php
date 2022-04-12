<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ListAkunController extends Controller
{
    public function list(Request $request)
    {
        $totalData = User::query()->where('role', '!=', 'admin');
        $datas = User::query()->where('role', '!=', 'admin');

        if (!is_null($request->term)) {
            $datas->orWhere("username", "LIKE", "%{$request->term}%");
            $totalData->orWhere("username", "LIKE", "%{$request->term}%");
        }
        if (!is_null($request->role) && $request->role != "semua") {
            $datas->orWhere("role", "=", "$request->role");
            $totalData->orWhere("role", "=", "$request->role");
        }
        session(['roleOption' => '$request->role']);

        $datas = $datas->get();
        $totalData = $totalData->count();

        return view('list-akun', compact('datas', 'totalData'));
    }
}
