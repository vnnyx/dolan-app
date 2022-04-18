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
        ]);



        User::create([
            'username' => $field['username'],
            'email' => $field['email'],
            'password' => bcrypt($field['password']),
            'role' => 'owner',
        ]);



        $image = $request->certificate->storeOnCloudinaryAs('abp', $request->fileName);
        $path = $image->getSecurePath();
        $publicId = $image->getPublicId();

        Wisata::create([
            'username' => $field['username'],
            'nama_wisata' => $field['namawisata'],
            'alamat' => $field['alamatwisata'],
            'credential' => $path,
            'public_id' => $publicId
        ]);
        toast('Berhasil daftar akun, silahkan login', 'success');
        return redirect('/login')->withInput();
    }
}
