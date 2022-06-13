<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;

class RegisController extends Controller
{

    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $field = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'namawisata' => 'required',
            'alamatwisata' => 'required',
            'certificate' => 'required|image|mimes:jpeg,png,jpg',
            'latitude' => 'required',
            'longitude' => 'required',
            'open' => 'required',
            'close' => 'required'
        ]);



        User::create([
            'username' => $field['username'],
            'email' => $field['email'],
            'password' => bcrypt($field['password']),
            'role' => 'owner',
        ]);



        $image = $request->certificate->storeOnCloudinaryAs('abp', $request->fileName);
        $path = $image->getSecurePath();

        Wisata::create([
            'username' => $field['username'],
            'nama_wisata' => $field['namawisata'],
            'alamat' => $field['alamatwisata'],
            'credential' => $path,
            'latitude' => $field['latitude'],
            'longitude' => $field['longitude'],
            'open'=>$field['open'],
            'close'=>$field['close'],
        ]);
        toast('Berhasil daftar akun, silahkan login', 'success');
        return redirect('/login')->withInput();
    }
}
