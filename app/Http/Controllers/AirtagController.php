<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Airtag;
use App\Models\User_Airtag;
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

        $user = Auth::user();

        $history = null;

        $airtags = DB::table('airtags')
            ->select('serialnumber', 'itemname', 'itememoji')
            ->join('users_airtags', 'airtags.id', '=', 'users_airtags.airtag_id')
            ->where('users_airtags.user_id', '=', $user->id)
            ->distinct()
            ->orderBy('itemname', 'asc')
            ->get();        

        return view('history', compact('airtags', 'history'));
    }

    public function historyDetail($serial)
    {

        $user = Auth::user();


        $airtags = DB::table('airtags')
            ->select('serialnumber', 'itemname', 'itememoji')
            ->join('users_airtags', 'airtags.id', '=', 'users_airtags.airtag_id')
            ->where('users_airtags.user_id', '=', $user->id)
            ->distinct()
            ->orderBy('itemname', 'asc')
            ->get();


        $history = DB::table('airtags')
            ->select('*')
            ->join('users_airtags', 'airtags.id', '=', 'users_airtags.airtag_id')
            ->where('users_airtags.user_id', '=', $user->id)
            ->where('airtags.serialnumber', '=', $serial)
            ->orderBy('airtags.id', 'desc')
            ->get();



        return view('history', compact('airtags', 'history'));
    }


    public function upload(Request $request)
    {

        if ($request->file != null) {

            $name = $_FILES["file"]["name"];
            $type = $_FILES["file"]["type"];
            $size = $_FILES["file"]["size"];

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
                    //$appleid = $item[11];

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
                            'itemname' => $itemname,
                            //'appleid' => $appleid,
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
        while (!feof($file)) {
            //echo fgets($file). "<br>";
            $line = fgets($file);

            $record = json_decode($line);

            if ($record) {


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