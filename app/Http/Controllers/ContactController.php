<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use App\Mail\TestEmail;
use Session;
use Illuminate\Support\Facades\Mail;

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
         $messages = DB::table('contacts')->orderBy('id', 'desc')->get();
         return view('admin', compact('messages'));
    }

    public function reply_message(Request $request)
    {
          $data = $request->all();
          
          // Send email 
          $mailData = [
               "subject" => "Thank you for contacting Airtagger.test",
               "message" => $data['message']
           ];       
           Mail::to($data['recipient_email'])->send(new TestEmail($mailData));    

          return redirect('admin')->with('success', 'Message has been sent.');
    }


    public function index()
    {
         return view('contact');
    }
    
}
