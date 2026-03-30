<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectTo = '/admin';

    public function showLoginForm()
    {
        // Redirect if already logged in
        if (Auth::check()) {
            return redirect('/admin');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Debug: Log the user info
            \Log::info('User logged in', [
                'id' => $user->id,
                'email' => $user->email,
                'is_admin' => $user->is_admin,
                'is_admin_type' => gettype($user->is_admin),
                'is_admin_strict' => $user->is_admin === true,
                'is_admin_loose' => $user->is_admin == true,
            ]);

            // Check if user is admin (use loose comparison)
            if (!$user->is_admin) {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Unauthorized access. Admin privileges required.',
                ]);
            }

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
