<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirtagController extends Controller
{
    public function index()
    {
        return view('upload-data');
    }

    public function upload(Request $request)
    {
        $csvfile = null;
        if ($request->file('csvfile') != null) {

            $name = $_FILES["csvfile"]["name"];  
            // Store the file extension or type
            $type = $_FILES["csvfile"]["type"];          
            // Store the file size
            $size = $_FILES["csvfile"]["size"];          
            echo "File actual name is $name"."<br>";
            echo "File has .$type extension" . "<br>";
            echo "File has $size of size"."<br>";


            if($name == "airtagger.csv"){
                echo "valid";
            } else {
                echo "invalid!";
            }


            // if ($request->file('image')->isValid()) {
            //     $user->image = time() . '.' . $request->image->extension();
            //     $request->image->move(public_path('images/avatars'), $user->image);
            // }
        }
        dd('uploading');
        return view('upload-data');
    }
}
