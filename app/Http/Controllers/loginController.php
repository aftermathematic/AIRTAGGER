<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
     public function index()
     {
          return view('login');
     }

     public function profile()
     {
          return view('profile');
     }

     function logout()
     {
          Session::flush();
          Auth::logout();
          return redirect('login')->with('success', 'You have been logged out.');
          ;
     }


     public function validate_login(Request $request)
     {
          $request->validate([
               'email' => 'required',
               'password' => 'required'
          ]);

          $credentials = $request->only('email', 'password');

          if (Auth::attempt($credentials, true)) {
               $user = Auth::user();
               Session::put('user', $user);
               return redirect('profile');
          }

          return redirect('login')->with('success', 'login details are not valid');
     }





}