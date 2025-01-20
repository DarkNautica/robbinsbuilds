<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'first-name' => 'required|string|max:255',
            'last-name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Prepare the data to be sent in the email
        $details = [
            'firstName' => $validatedData['first-name'],
            'lastName' => $validatedData['last-name'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
        ];

        // Send the email using the Mailable class
        Mail::to('jaydenlyricr@gmail.com')->send(new ContactFormMail($details));

        // Redirect back with a success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
