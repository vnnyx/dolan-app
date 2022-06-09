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

class ForgotPasswordController extends Controller
{
    public function sendEmail(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'exists:users,email']
        ]);
        if ($validator->fails()) {
            return WebResponse::webResponse(400, "BAD_REQUEST", null, $validator->errors());
        }

        $username = User::query()->where('email', '=', $request->input('email'))->value('username');
        $otp = rand(1000, 9999);
        DB::table('password_resets')->insert([
            'email' => $request->input('email'),
            'token' => $otp
        ]);
        $data = [
            'username' => $username,
            'otp' => $otp
        ];
        Mail::to($request->input('email'))->send(new SendOTP($data));
        return WebResponse::webResponse(200, "OK", "Success send otp to email");
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
            ->select(['users.id', 'users.username', 'users.email', 'token'])
            ->where('password_resets.token', '=', $request->input('otp'))
            ->get();

        return WebResponse::webResponse(200, "OK", $result);
    }

    public function resetPassword(Request $request): JsonResponse
    {
        $otpValidate = DB::table('password_resets')->where('token', '=', $request->query('otp'))->first();
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
