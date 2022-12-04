<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AirtagController extends Controller
{
    public function index()
    {
        return view('upload-data');
    }

    public function history()
    {
        return view('history');
    }

    public function upload(Request $request)
    {

        if($request->file != null){
            //dd('valid');

            $name = $_FILES["file"]["name"];  
            // Store the file extension or type
            $type = $_FILES["file"]["type"];          
            // Store the file size
            $size = $_FILES["file"]["size"];          
            // echo "File actual name is $name"."<br>";
            // echo "File has .$type extension" . "<br>";
            // echo "File has $size of size"."<br>";

            $fileName = Auth::user()->email . ' - ' . time() . '.csv';
            $request->file->move(public_path('files'), $fileName);

            $fullpath = public_path('files') . "/" . $fileName;

            $file = fopen(($fullpath), "r");
            $counter = 0;
            while (!feof($file)) {
    
                $line = fgets($file);
                $item = str_getcsv($line);
    
                if ($counter > 0) {
    
                    $datetime = $item[0];
                    $serialnumber = $item[1];
                    $batterystatus = $item[2];
                    $locationpositiontype = $item[3];
                    $locationlatitude = $item[4];
                    $locationlongitude = $item[5];
                    $locationtimestamp = $item[6];
                    $mapItemFullAddress = $item[7];
                    $addresscountry = $item[8];
                    $itememoji = $item[9];
                    $itemname = $item[10];
    
                    $id = DB::table('airtags')->insertGetId(
                        [
                            'datetime' => $datetime,
                            'serialnumber' => $serialnumber,
                            'batterystatus' => $batterystatus,
                            'locationpositiontype' => $locationpositiontype,
                            'locationlatitude' => $locationlatitude,
                            'locationlongitude' => $locationlongitude,
                            'locationtimestamp' => $locationtimestamp,
                            'mapItemFullAddress' => $mapItemFullAddress,
                            'addresscountry' => $addresscountry,
                            'itememoji' => $itememoji,
                            'itemname' => $datetime
                        ]
                    );
    
                    DB::table('users_airtags')->insert([
                        'user_id' => Auth::user()->id,
                        'airtag_id' => $id
                    ]);
    
                }
    
                $counter++;
            }
        }

        return redirect()->route('history')->with('success', 'Airtags added successfully.');
    }


    public function process()
    {
        $file = fopen(("files\janvermeerbergen@gmail.com - 1670024342.csv"), "r");
        while(!feof($file)) {
            //echo fgets($file). "<br>";
            $line = fgets($file);

            $record = json_decode($line);

            if($record){


                echo $record->serialNumber . "<br/>";
                echo $record->address->mapItemFullAddress . "<br/>";

                // if($mapItemFullAddress != null){
                //     echo $mapItemFullAddress . "<br>";
                // }

                echo "======================";
                
            }
            

        }
        
        //dd($file);
        //return view('upload-data-process');
    }
}
