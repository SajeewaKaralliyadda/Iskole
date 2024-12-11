<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Display the login form (get request)
    public function showLoginForm()
    {
        return view('Login');
    }

    public function login(Request $request)
    {
        //validate form data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Redirect to intended page (usually dashboard) after successful login
            return redirect()->intended('/Dashboard');
        }

        // Return back with an error message if login fails
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }
}
