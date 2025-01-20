<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Email;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'first-name' => 'required|string|max:255',
            'last-name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone-number' => 'nullable|string|max:20',
            'message' => 'required|string|max:5000',
        ]);

        // Prepare email data
        $data = [
            'firstName' => $validatedData['first-name'],
            'lastName' => $validatedData['last-name'],
            'company' => $validatedData['company'] ?? 'N/A',
            'email' => $validatedData['email'],
            'phoneNumber' => $validatedData['phone-number'] ?? 'N/A',
            'messageBody' => $validatedData['message'],
        ];

        // Use Laravel's Mail facade to send the email
        Mail::raw($data['messageBody'], function ($message) use ($data) {
            $message->from($data['email'], "{$data['firstName']} {$data['lastName']}")
                    ->to('jaydenlyricr@gmail.com') // Replace with your receiving email
                    ->subject('New Contact Form Submission');
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
