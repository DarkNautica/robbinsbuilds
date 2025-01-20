<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail; // Use your Mailable class

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the form inputs
        $validatedData = $request->validate([
            'first-name' => 'required|string|max:255',
            'last-name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Prepare email data
        $data = [
            'firstName' => $validatedData['first-name'],
            'lastName' => $validatedData['last-name'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
        ];

        // Send email using the Mail facade
        Mail::to('jaydenlyricr@gmail.com')->send(new ContactFormMail($data));

        // Redirect back with success message
        return back()->with('success', 'Your message has been sent!');
    }
}
