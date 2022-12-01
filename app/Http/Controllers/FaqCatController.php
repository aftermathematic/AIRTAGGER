<?php

namespace App\Http\Controllers;

use App\Models\FaqCat;
use Illuminate\Http\Request;
use Session;

class FaqCatController extends Controller
{
    public function index()
    {
        $faqCats = FaqCat::orderBy('title')->get();
        return view('faq', compact('faqCats'));
    }

    public function faq_index()
    {
        $faqCats = FaqCat::orderBy('title')->get();
        return view('admin_faq', compact('faqCats'));
    }

    public function create()
    {
        return view('admin_faqcat_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'          =>  'required'
        ]);

        $faqCat = new FaqCat;
        $faqCat->title = $request->title;
        $faqCat->save();

        return redirect()->route('admin.faq')->with('success', 'Faq category added successfully.');
    }

    public function show($id)
    {
        $faqCat = FaqCat::find($id);
        dd($faqCat);
    }

    public function edit($id)
    {
        $faqCat = FaqCat::find($id);
        return view('admin_faqcat_update', compact('faqCat'));
    }
    
    public function update(Request $request)
    {

        $request->validate([
            'title'          =>  'required',
            'id'          =>  'required'
        ]);

        $faqCat = FaqCat::find($request->id);
        $faqCat->title = $request->title;
        $faqCat->save();

        return redirect()->route('admin.faq')->with('success', 'Faq category updated successfully.');
    }

    public function destroy($id)
    {
        $faqCat = FaqCat::find($id);
        $faqCat->delete();
        return redirect()->route('admin.faq')->with('success', 'Faq category deleted successfully.');
    }



}
