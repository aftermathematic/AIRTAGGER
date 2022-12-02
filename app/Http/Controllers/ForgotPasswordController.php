<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('forgot-password');
    }

    public function store(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return view('forgot-password-sent');
    }

    public function sent()
    {
        return view('forgot-password-sent');
    }

    public function reset(Request $request)
    {
        $token = $request->token;
        $email = $request->email;

        $user = User::select('*')
            ->join('password_resets', 'users.email', '=', 'password_resets.email')
            ->where('users.email', '=', $request->email)
            ->where('password_resets.created_at', '>=', Carbon::now()->subMinutes(60)->toDateTimeString())
            ->first();
        if ($user) {
            return view('password-reset', compact('token', 'email', 'user'));
        } else {
            return redirect('login')->with('success', 'Token invalid.');
        }

    }

    public function resetpw(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);        

        $user = User::find($request->id);
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('login')->with('success', 'Password updated succesfully.');
    }

}