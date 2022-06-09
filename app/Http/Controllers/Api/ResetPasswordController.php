<?php

namespace App\Http\Controllers\Api;

use App\Helper\WebResponse;
use App\Http\Controllers\Controller;
use App\Mail\SendOTP;
use App\Models\User;
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
            return WebResponse::webResponse(400, "BAD_REQUEST", null, $validator->errors());
        }

        $user = User::query()->where('email', '=', $request->input('email'))->first();
        $otp = rand(1000, 9999);
        DB::table('password_resets')->insert([
            'email' => $request->input('email'),
            'token' => $otp
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
        if ($validator->fails()) {
            return WebResponse::webResponse(400, "BAD_REQUEST", null, "Invalid OTP");
        }
        $result = DB::table('password_resets')
            ->join('users', 'users.email', '=', 'password_resets.email')
            ->where('password_resets.token', '=', $request->input('otp'))
            ->first(['users.id', 'users.username', 'users.email', 'token']);

        $data = [
            'user_id'=>$result->id,
            'username'=>$result->username,
            'email'=>$result->email,
            'otp'=>$result->token
        ];

        return WebResponse::webResponse(200, "OK", $data);
    }

    public function resetPassword(Request $request): JsonResponse
    {
        $otpValidate = DB::table('password_resets')
            ->where('token', '=', $request->query('otp'))->first('token');
        if ($otpValidate == null){
            return WebResponse::webResponse(400, "BAD_REQUEST", null, "Invalid OTP");
        }
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'confirmed', 'min:8']
        ]);
        if ($validator->fails()) {
            return WebResponse::webResponse(400, "BAD_REQUEST", null, $validator->errors());
        }
        $data = User::find($request->query('id'));
        if(!$data){
            return WebResponse::webResponse(400, "BAD_REQUEST", null, "User not found");
        }
        $data->update([
            'password' => bcrypt($request->input('password'))
        ]);
        DB::table('password_resets')->where('email', '=', $data->email)->delete();
        return WebResponse::webResponse(200, "OK", "Success reset password");

    }
}
