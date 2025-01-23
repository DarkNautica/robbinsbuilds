<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'first-name' => 'required|string|max:255',
            'last-name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Prepare the data to send
        $details = [
            'firstName' => $validated['first-name'],
            'lastName' => $validated['last-name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ];

        // Send the email
        Mail::send('emails.contact', ['details' => $details], function ($message) use ($details) {
            $message->to('jaydenlyricr@gmail.com')
                    ->subject('New Contact Form Submission')
                    ->replyTo($details['email']);
        });

        return back()->with('success', 'Thank you for contacting us!');
    }
}

