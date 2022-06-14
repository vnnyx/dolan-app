<?php

namespace App\Http\Controllers\Api\Auth;

use App\Helper\WebResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        $validate = Validator::make($request->all(), [
            'username'=>'required',
            'password'=>'required'
        ]);

        if ($validate->fails()) {
            return WebResponse::webResponse(400, "BAD_REQUEST", null, $validate->errors()->first());
        }

        $user = User::where('username', $request->input('username'))->first();

        if (!$user || !Hash::check($request->input('password'), $user->password)) {
            return WebResponse::webResponse(400, 'BAD REQUEST', null, 'Check your credential');
        }

        $token = auth('api')->attempt($request->only('username', 'password'));

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
        $validate = Validator::Make($request->all(), [
            'username'=>['required', 'unique:users,username'],
            'email'=>['required', 'unique:users,email'],
            'password'=>['required', 'min:8', 'confirmed']
        ]);
        if ($validate->fails()){
            return WebResponse::webResponse(400, 'BAD_REQUEST', null, $validate->errors()->first());
        }

        $user = User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
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
