<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Verify Turnstile response
        $turnstileResponse = $request->input('cf-turnstile-response');
        $turnstileValidation = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
            'secret' => env('CLOUDFLARE_TURNSTILE_SECRET_KEY'),
            'response' => $turnstileResponse,
            'remoteip' => $request->ip(),
        ]);

        if (!$turnstileValidation->json('success')) {
            return back()->withErrors(['captcha' => 'CAPTCHA verification failed. Please try again.']);
        }

        // Validate form inputs
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

        // Send email
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email'], "{$data['firstName']} {$data['lastName']}")
                    ->to('jaydenlyricr@gmail.com') // Replace with your receiving email
                    ->subject('New Contact Form Submission');
        });

        // Return success response
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
