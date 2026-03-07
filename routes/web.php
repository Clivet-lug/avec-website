<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TeamController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::post('/contact', function (Request $request) {
//     $validated = $request->validate([
//         'first_name' => 'required',
//         'last_name' => 'required',
//         'email' => 'required|email',
//         'phone' => 'nullable',
//         'organization' => 'nullable',
//         'message' => 'required',
//     ]);

//     // TODO: Send email here (we'll set this up next)
//     // For now, just return success

//     return back()->with('success', 'Thank you! We will get back to you soon.');
// })->name('contact.submit');

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Services
Route::get('/services', [ServicesController::class, 'index'])->name('services');

// Team
Route::get('/team', [TeamController::class, 'index'])->name('team');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/category/{slug}', [BlogController::class, 'category'])->name('blog.category');
