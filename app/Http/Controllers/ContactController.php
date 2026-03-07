<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'organization' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // TODO: Send email (we'll implement this later)
        // For now, just store in session and redirect back

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
