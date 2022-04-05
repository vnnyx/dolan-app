<?php

namespace App\Http\Controllers\Api\Auth;

use App\Helper\WebResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $field = $request->validate([
            'email' => 'string|required',
            'password' => 'string|required'
        ]);

        $user = User::where('email', $field['email'])->first();

        if (!$user || !Hash::check($field['password'], $user->password)) {
            return WebResponse::webResponse(400, 'BAD REQUEST');
        }

        $token = $user->createToken('mytoken')->plainTextToken;

        $data = [
            'id_user' => $user['id'],
            'username' => $user['username'],
            'token' => $token
        ];

        return WebResponse::webResponse(200, 'OK', $data);
    }

    public function register(Request $request){
        $field = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => ['required', 'min:8']
        ]);

        $user = User::create([
            'username' => $field['username'],
            'email' => $field['email'],
            'password' => bcrypt($field['password'])
        ]);

        $token = $user->createToken('mytoken')->plainTextToken;

        $data = [
            'data'=>$user,
            'token'=>$token
        ];

        return WebResponse::webResponse(200, 'OK', $data);
    }
}
