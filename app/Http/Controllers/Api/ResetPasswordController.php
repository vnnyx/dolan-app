<?php

namespace App\Http\Controllers\Api;

use App\Helper\ValidationMessage;
use App\Helper\WebResponse;
use App\Http\Controllers\Controller;
use App\Mail\SendOTP;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;

class ResetPasswordController extends Controller
{
    public function sendEmail(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'exists:users,email']
        ]);
        if ($validator->fails()) {
            return WebResponse::webResponse(400, "BAD_REQUEST", null, 'Email tidak terdaftar');
        }

        $user = User::query()->where('email', '=', $request->input('email'))->first();
        $otp = rand(1000, 9999);
        DB::table('password_resets')->insert([
            'email' => $request->input('email'),
            'token' => $otp,
            'expired_at'=>Carbon::now()->addMinutes(5),
            'created_at'=>Carbon::now()
        ]);
        $data = [
            'user_id'=>$user->id,
            'username' => $user->username,
            'email'=>$user->email,
            'otp' => (string)$otp
        ];
        Mail::to($request->input('email'))->send(new SendOTP($data));
        return WebResponse::webResponse(200, "OK", $data);
    }

    public function validateOtp(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'otp' => ['required', 'exists:password_resets,token']
        ]);
        $expired = DB::table('password_resets')
            ->where('expired_at', '>=', Carbon::now())
            ->where('token', '=', $request->input('otp'))->count();
        if ($validator->fails() || $expired == 0 || $request->query('email') == null) {
            return WebResponse::webResponse(400, "BAD_REQUEST", null, "Kode OTP tidak sesuai");
        }
        DB::table('password_resets')
            ->where('email', '=', $request->query('email'))
            ->delete();
        return WebResponse::webResponse(200, "OK");
    }

    public function resetPassword(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'confirmed', 'min:8']
        ], ValidationMessage::message());
        if ($validator->fails()) {
            return WebResponse::webResponse(400, "BAD_REQUEST", null, $validator->errors()->first());
        }
        $data = User::find($request->query('id'));
        if(!$data){
            return WebResponse::webResponse(400, "BAD_REQUEST", null, "User tidak ditemukan");
        }
        $data->update([
            'password' => bcrypt($request->input('password'))
        ]);
        return WebResponse::webResponse(200, "OK", "Berhasil reset password");

    }
}
