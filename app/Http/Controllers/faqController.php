<?php

namespace App\Http\Controllers;

use App\Models\FaqCat;
use App\Models\FaqItem;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function showFaqCats()
    {
         $faqCats = FaqCat::get();
         $faqItems = FaqItem::get();
         return view('faq', compact('faqCats', 'faqItems'));
    }
}
