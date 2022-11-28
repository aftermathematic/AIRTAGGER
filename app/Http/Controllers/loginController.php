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

     public function register()
     {
          return view('register');
     }

     public function validate_registration(Request $request)
     {
          $request->validate([
               'username' => 'required',
               'email' => 'required|email|unique:users',
               'password' => 'required|confirmed|min:6',
               'image' => 'image|mimes:jpg,jpeg,png,gif|max:1024'
          ]);

          $data = $request->all();

          $imageName = null;

          if ($request->file('image') != null) {
               if ($request->file('image')->isValid()) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('images/avatars'), $imageName);
               }
          }

          User::create([
               'username' => $data['username'],
               'email' => $data['email'],
               'birthday' => $data['birthday'],
               'aboutme' => $data['aboutme'],
               'image' => $imageName,
               'password' => Hash::make($data['password'])
          ]);

          return redirect('login')->with('success', 'Registration completed.');
     }

     public function validate_adminRegistration(Request $request)
     {
          $request->validate([
               'username' => 'required',
               'email' => 'required|email|unique:users',
               'password' => 'required|confirmed|min:6',
               'image' => 'image|mimes:jpg,jpeg,png,gif|max:1024'
          ]);

          $data = $request->all();

          $imageName = null;
          if ($request->file('image') != null) {
               if ($request->file('image')->isValid()) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('images/avatars'), $imageName);
               }
          }

          $admin = "0";
          if ($data['admin'] == "on") {
               $admin = "1";
          }

          User::create([
               'username' => $data['username'],
               'email' => $data['email'],
               'birthday' => $data['birthday'],
               'aboutme' => $data['aboutme'],
               'admin' => $admin,
               'image' => $imageName,
               'password' => Hash::make($data['password'])
          ]);

          return redirect('admin_users')->with('success', 'Registration completed.');
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

     function profile()
     {
          $user = auth()->user();
          return view('profile')->with('user', $user);
     }

     function updateprofile()
     {
          $user = auth()->user();
          return view('updateprofile')->with('user', $user);
     }


     function validate_updatedetails(Request $request)
     {
          $user = auth()->user();
          $update = DB::table('users')
               ->where('id', $user->id)
               ->update(
                    [
                         'username' => $request->username,
                         'email' => $request->email,
                         'birthday' => $request->birthday,
                         'aboutme' => $request->aboutme,
                    ]
               );

          return redirect('profile')->with('success', 'Profile updated.');
     }

     function logout()
     {
          Session::flush();
          Auth::logout();
          return redirect('login')->with('success', 'You have been logged out.');
          ;
     }


     function admin()
     {
          if (Auth::user()->admin === 1) {
               return view('admin');
          }

          return redirect('login')->with('success', 'you are not allowed to access');
     }

     function admin_messages()
     {
          if (Auth::user()->admin === 1) {
               return view('admin_messages');
          }

          return redirect('login')->with('success', 'you are not allowed to access');
     }

     function admin_userCreate()
     {
          if (Auth::user()->admin === 1) {
               return view('admin_userCreate');
          }

          return redirect('login')->with('success', 'you are not allowed to access');
     }



}