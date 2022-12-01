<?php

namespace App\Http\Controllers;

use App\Models\NewsItem;
use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NewsItemController extends Controller
{
    public function index()
    {
        $newsItems = NewsItem::get();
        return view('news', compact('newsItems'));
    }

    public function create()
    {
        return view('admin_news_create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:1024',
            'user_id' => 'required|exists:users,id'
        ]);

        // Image upload
        $imageName = null;
        if ($request->hasfile('image')) {
             if ($request->file('image')->isValid()) {
                  $imageName = time() . '.' . $request->image->extension();
                  $request->image->move(public_path('images/news'), $imageName);
             }
        }

        $newsItem = new NewsItem;
        $newsItem->title = $request->title;
        $newsItem->content = $request->content;        
        $newsItem->image = $imageName;
        $newsItem->user_id = $request->user_id;
        $newsItem->save();

        return redirect()->route('admin.news')->with('success', 'News item added successfully.');
    }

    public function show($id)
    {
        $newsItem = NewsItem::find($id);
        dd($newsItem);
    }

    public function edit($id)
    {
        $newsItem = NewsItem::find($id);
        return view('admin_news_update', compact('newsItem'));
        
    }

    public function update(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|max:1024',
            'user_id' => 'required|exists:users,id'
        ]);

        $newsItem = NewsItem::find($request->id);
        $newsItem->title = $request->title;
        $newsItem->content = $request->content;

        // Image upload
        $imageName = $request->image_placeholder;        
        if ($request->hasfile('image')) {
                if ($request->file('image')->isValid()) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('images/news'), $imageName);
                }
        }

        $newsItem->image = $imageName;
        $newsItem->user_id = $request->user_id;
        $newsItem->save();

        return redirect()->route('admin.news')->with('success', 'News item updated successfully.');
    }

    public function destroy($id)
    {
        $newsItem = NewsItem::find($id);
        $newsItem->delete();

        return redirect()->route('admin.news')->with('success', 'News item deleted successfully.');
    }

    // ADMIN

    public function admin_index()
    {
        $newsItems = NewsItem::get()->reverse();;
        return view('admin_news', compact('newsItems'));
    }
}