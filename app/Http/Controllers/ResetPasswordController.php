<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{

    public function sendEmailView()
    {
        return view('send-email');
    }

    public function forgotPasswordView(Request $request, $token = null)
    {
        return view('forgot-password')->with(['token' => $token, 'email' => $request->email]);
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $username = User::query()->where('email', '=', $request->email)->select('username')->value('username');

        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        $link = route('reset.password', ['token' => $token, 'email' => $request->email]);
        $data = [
            'link'=>$link,
            'email'=>$request->email,
            'username'=>$username
        ];
        Mail::to($request->email)->send(new ForgotPasswordMail($data));

        toast('Sukses mengirimkan email verifikasi', 'success');
        return redirect()->back();
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required'
        ]);
        $check_token = DB::table('password_resets')
            ->where('email', '=', $request->email)
            ->where('token', '=', $request->token)->first();

        if (!$check_token) {
            alert()->warning('Oops...', 'Token tidak valid');
            return redirect()->back();
        } else {
            $data = User::where('email', '=', $request->email);
            $data->update([
                'password' => bcrypt($request->password)
            ]);
            DB::table('password_resets')->where('token', '=', $request->token)->delete();
            toast('Password berhasil dirubah, silahkan login kembali', 'success');
            return redirect('/login')->withInput();
        }
    }
}
