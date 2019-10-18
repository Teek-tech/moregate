<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactformController extends Controller
{
    public function create(){

        return view('contact.contact-us');
    }

    public function send(){

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'company' => 'required',
            'message' => 'required'
        ]);

        // dd(request()->all());
        //Send Email

        Mail::to('leadsjetservice@yahoo.com')->send(new ContactFormMail($data));

        return back()->with('message', 'Thanks for Contacting US!');
    }
}
