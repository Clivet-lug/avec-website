<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'phone' => 'nullable',
        'organization' => 'nullable',
        'message' => 'required',
    ]);

    // TODO: Send email here (we'll set this up next)
    // For now, just return success

    return back()->with('success', 'Thank you! We will get back to you soon.');
})->name('contact.submit');
