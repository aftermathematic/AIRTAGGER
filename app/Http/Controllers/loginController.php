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
               'username' => 'required',
               'email' => 'required|email|unique:users',
               'password' => 'required|min:6',
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

          if (Auth::attempt($credentials, true)) {
               
              // $user = Auth::user();
              // dd($user);
               $user = Auth::user();
               Session::put('user', $user);

               return redirect('dashboard');
          }

          return redirect('login')->with('success', 'login details are not valid');
     }

     function dashboard()
     {
          if (Auth::check()) {
               return view('dashboard');
          }

          return redirect('login')->with('success', 'you are not allowed to access');
     }

     function profile()
     {
          if (Auth::check()) {
               return view('profile');
          }

          return redirect('login')->with('success', 'you are not allowed to access');
     }

     function logout()
     {
          Session::flush();
          Auth::logout();

          return redirect('login');

     }


     function admin()
     {
          // if (Auth::user()->admin === 1) {
          //      return view('admin');
          // }

          // return redirect('login')->with('success', 'you are not allowed to access');
          return view('admin');

     }


}