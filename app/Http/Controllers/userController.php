<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Hash;
use Session;

class UserController extends Controller
{
    public function showUsers()
    {
        $users = DB::table('users')->orderBy('id', 'asc')->get();
        return view('admin_users', compact('users'));
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