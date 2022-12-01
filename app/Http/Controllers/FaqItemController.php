<?php

namespace App\Http\Controllers;

use App\Models\FaqCat;
use App\Models\FaqItem;
use Illuminate\Http\Request;
use Session;

class FaqItemController extends Controller
{
    public function index()
    {
        $faqItems = faqItem::get();
        dd($faqItems);
    }

    public function create()
    {

        $faqCats = FaqCat::orderBy('title')->get();
        return view('admin_faqitem_create', compact('faqCats'));

    }

    public function store(Request $request)
    {
        //dd('store');
        $request->validate([
            'question'      =>      'required',
            'answer'        =>      'required',
            'faq_cat_id'    =>      'required|exists:faq_cats,id'
        ]);

        $faqItem = new faqItem;
        $faqItem->question = $request->question;
        $faqItem->answer = $request->answer;
        $faqItem->faq_cat_id = $request->faq_cat_id;
        $faqItem->save();

        return redirect()->route('admin.faq')->with('success', 'Faq item added successfully.');
    }

    public function show($id)
    {
        $faqItem = FaqItem::find($id);
        dd($faqItem);
    }

    public function edit($id)
    {
        $faqItem = FaqItem::find($id);
        $faqCats = FaqCat::get();
        return view('admin_faqitem_update', compact('faqItem', 'faqCats'));
    }
    
    public function update(Request $request)
    {
        $request->validate([
            'question'          =>  'required',
            'answer'          =>  'required',
            'id'          =>  'required'
        ]);

        $faqItem = faqItem::find($request->id);
        $faqItem->question = $request->question;
        $faqItem->answer = $request->answer;
        $faqItem->faq_cat_id = $request->faq_cat_id;
        $faqItem->save();

        return redirect()->route('admin.faq')->with('success', 'Faq item updated successfully.');
    }

    public function destroy($id)
    {
        $faqItem = FaqItem::find($id);
        $faqItem->delete();
        return redirect()->route('admin.faq')->with('success', 'Faq item deleted successfully.');
    }



}
