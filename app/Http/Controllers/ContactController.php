<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function validate_message(Request $request)
    {
         $request->validate([
              'name' => 'required',
              'email' => 'required|email',
              'message' => 'required'
         ]);

         $data = $request->all();

         Contact::create([
              'name' => $data['name'],
              'email' => $data['email'],
              'message' => $data['message']
         ]);

         return redirect('contact')->with('success', 'Message has been sent.');
    }

    public function showContactMessages()
    {
         $messages = Contact::get();
         return view('admin_messages', compact('messages'));
    }

    public function reply_message()
    {
         dd('reply');
    }
    
}
