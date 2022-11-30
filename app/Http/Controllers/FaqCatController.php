<?php

namespace App\Http\Controllers;

use App\Models\FaqCat;
use Illuminate\Http\Request;
use Session;

Session::put('pg', 'faq');

class FaqCatController extends Controller
{
    public function index()
    {
        $faqCats = FaqCat::with(['faqItems'])->get();
        return view('faq', compact('faqCats'));
    }

    public function create()
    {
        return view('faqCat_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'          =>  'required'
        ]);

        $faqCat = new FaqCat;
        $faqCat->title = $request->title;
        $faqCat->save();

        return redirect()->route('admin')->with('success', 'Faq category added successfully.');
    }

    public function show($id)
    {
        $faqCat = FaqCat::find($id);
        dd($faqCat);
    }

    public function edit($id)
    {
        $faqCat = FaqCat::find($id);
        dd($faqCat);
    }
    
    public function update(Request $request)
    {
        $request->validate([
            'title'          =>  'required'
        ]);

        $faqCat = FaqCat::find($request->id);
        $faqCat->title = $request->title;
        $faqCat->save();

        return redirect()->route('admin')->with('success', 'Faq category updated successfully.');
    }

    public function destroy(FaqCat $faqCat)
    {
        $faqCat->delete();

        return redirect()->route('admin')->with('success', 'Faq category deleted successfully.');
    }

}
