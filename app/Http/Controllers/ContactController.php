<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ]);

        Mail::to('verifiedbuilders007@gmail.com')->send(new ContactFormMail($validatedData));

        return redirect()->route('contact')->with(
            'success',
            'Thank you for your message. We\'ll get back to you soon!'
        );
    }
}
