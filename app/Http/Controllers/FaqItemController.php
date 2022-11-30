<?php

namespace App\Http\Controllers;

use App\Models\FaqItem;
use Illuminate\Http\Request;
use Session;

Session::put('pg', 'faq');

class FaqItemController extends Controller
{
    public function index()
    {
        $faqItems = faqItem::get();
        dd($faqItems);
    }

    public function create()
    {
        return view('create_faqItem');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question'      =>      'required',
            'answer'        =>      'required',
            'faq_cat_id'    =>      'required|exists:faq_cats,id'
        ]);

        $faqItem = new faqItem;
        $faqItem->question = $request->question;
        $faqItem->answer = $request->answer;
        $faqItem->save();

        return redirect()->route('admin')->with('success', 'Faq item added successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }
    
    public function update(Request $request)
    {
        $request->validate([
            'title'          =>  'required'
        ]);

        $faqItem = faqItem::find($request->id);
        $faqItem->title = $request->title;
        $faqItem->save();

        return redirect()->route('admin')->with('success', 'Faq item updated successfully.');
    }

    public function destroy(faqItem $faqItem)
    {
        $faqItem->delete();

        return redirect()->route('admin')->with('success', 'Faq item deleted successfully.');
    }

}
