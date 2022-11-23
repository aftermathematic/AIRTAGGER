<?php

namespace App\Http\Controllers;

use App\Models\NewsItem;
use Illuminate\Http\Request;

//use App\NewsItems;

class newsItemController extends Controller
{
    public function showNewsItems()
    {
         $newsItems = NewsItem::get();
         return view('news', compact('newsItems'));
    }
}