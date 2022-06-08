<?php

namespace App\Http\Controllers\Api\Auth;

use App\Helper\WebResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        $field = $request->validate([
            'email' => 'string|required',
            'password' => 'string|required|confirmed|min:8'
        ]);

        $user = User::where('email', $field['email'])->first();

        if (!$user || !Hash::check($field['password'], $user->password)) {
            return WebResponse::webResponse(400, 'BAD REQUEST');
        }

        $token = auth('api')->attempt($request->only('email', 'password'));

        $data = [
            'access_token' => $token,
            'user_id' => $user['id'],
            'username' => $user['username'],
            'email'=>$user['email']
        ];

        return WebResponse::webResponse(200, 'OK', $data);
    }

    public function register(Request $request): JsonResponse
    {
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

        $token = auth('api')->attempt($request->only('email', 'password'));

        $data = [
            'access_token'=>$token,
            'user_id'=>$user['id'],
            'username'=>$user['username'],
            'email'=>$user['email']
        ];

        return WebResponse::webResponse(200, 'OK', $data);
    }
}
