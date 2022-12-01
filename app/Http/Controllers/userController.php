<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Hash;
use Session;

class UserController extends Controller
{

    public function getUser($id)
    {
        $user = DB::table('users')->find($id);

        //Search for username if no result found. 
        //This allows profile page to be reached by ID and Username
        if(!$user){
            $user = DB::table('users')->where('username', $id)->first();
        }

        if($user){
            if($user->image == null){
                $user->image = "dummy-profile-pic.png";
            }
            return view('user', compact('user'));
        } else {
            // Show 404 when wrong id entered
            abort(404);
        }        
    }



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