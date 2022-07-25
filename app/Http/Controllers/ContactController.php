<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    
    public function saveContact(Request $request)
    {
        // $contact = new Contact;

        // $contact->name = $request->name;
        // $contact->email = $request->email;
        // $contact->subject = $request->subject;
        // $contact->message = $request->message;

        // $contact->save();

        \Mail::send(
            'contact-email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'user_message' => $request->get('message'),
            ),
            function ($message) use ($request) {
                $message->from($request->email);
                $message->to('info@simplef.xyz');
            }
        );

        return Redirect()->route('home')->with('message', 'Your message has been send successfully!');
    }
}
