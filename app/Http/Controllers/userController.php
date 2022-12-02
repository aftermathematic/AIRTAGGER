<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Hash;
use Auth;
use Session;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id')->get();
        return view('admin_users', compact('users'));
    }


    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:1024'
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->birthday = $request->birthday;
        $user->aboutme = $request->aboutme;
        $user->password = Hash::make($request->password);

        $user->image = null;
        if ($request->file('image') != null) {
            if ($request->file('image')->isValid()) {
                $user->image = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/avatars'), $user->image);
            }
        }

        $user->save();

        return redirect('login')->with('success', 'Registration completed.');
    }


    public function admin_store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:1024'
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->birthday = $request->birthday;
        $user->aboutme = $request->aboutme;

        $user->admin = "0";
        if ($request['admin'] == "on") {
            $user->admin = "1";
        }

        $user->password = Hash::make($request->password);

        $user->image = null;
        if ($request->file('image') != null) {
            if ($request->file('image')->isValid()) {
                $user->image = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/avatars'), $user->image);
            }
        }

        $user->save();

        return redirect('admin_users')->with('success', 'Registration completed.');
    }    

    public function show($id)
    {
        $user = User::find($id);
        if ($user->image == null) {
            $user->image = "dummy-profile-pic.png";
        }
        return view('user', compact('user'));
    }

    public function edit()
    {
        $user = User::find(Auth::user()->id);
        return view('updateprofile', compact('user'));
    }

    public function editpw()
    {
        $user = User::find(Auth::user()->id);
        return view('updatepw', compact('user'));
    }    

    public function update(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users,email,'.$request->id,
            'image' => 'nullable|max:1024',
        ]);

        $user = User::find($request->id);

        $user->username = $request->username;
        $user->email = $request->email;
        $user->birthday = $request->birthday;
        $user->aboutme = $request->aboutme;
        $user->password = Hash::make($request->password);

        $imageName = $request->image_placeholder;
        if ($request->hasfile('image')) {
            if ($request->file('image')->isValid()) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/avatars'), $imageName);
            }
        }
        $user->image = $imageName;

        $user->save();        

        return redirect('profile')->with('success', 'User profile updated succesfully.');
    }


    public function updatepw(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::find($request->id);
        $user->password = Hash::make($request->password);
        $user->save();        

        return redirect('profile')->with('success', 'Password updated succesfully.');
    }    

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('profile')->with('success', 'User deleted successfully.');
    }

    public function admin_promote(Request $request)
    {
        $userid = $request->user;
        $isAdmin = $request->isAdmin;

        $user = User::find($userid);
        $user->admin = $isAdmin;
        $user->save();
    }

}