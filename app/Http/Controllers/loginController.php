<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
     public function index()
     {
          return view('login');
     }

     public function validate_registration(Request $request)
     {
          $request->validate([
               'name' => 'required',
               'email' => 'required|email|unique:users',
               'email' => 'required|min:6',
          ]);

          $data = $request->all();

          User::create([
               'username' => $data['username'],
               'email' => $data['email'],
               'password' => Hash::make($data['password'])
          ]);

          return redirect('login')->with('success', 'Registration completed. You can now login.');
     }



     public function validate_login(Request $request)
     {
          $request->validate([
               'email' => 'required',
               'password' => 'required'
          ]);

          $credentials = $request->only('email', 'password');

          if (Auth::attempt($credentials)) {
               return redirect('dashboard');
          }

          return redirect('login')->with('succes', 'login details are not valiid');
     }

     function dashbboard()
     {
          if (Auth::check()) {
               return view('dashboard');
          }

          return redirect('login')->with('success', 'you are not allowed to access');
     }

     function logout()
     {
          Session::flush();
          Auth::logout();

          return redirect('login');

     }


}