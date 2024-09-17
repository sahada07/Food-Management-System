<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;


class AuthController extends Controller
{
    // Show the registration form
    public function showRegisterForm()
    {
        return view('register');
    }

    // Handle user registration
    public function register(Request $request)
{
    // Validate form inputs
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:5|confirmed',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    // Create the user and assign it to a variable
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // Send a welcome email to the user
    Mail::to($user->email)->send(new WelcomeEmail($user));

    return redirect()->route('login.form')->with('success', 'Registration successful! Please login.');
}

    // Show the login form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle user login
    public function login(Request $request)
    {
        // Validate form inputs
        // $validator = $request->validate([
        //     'email' => 'required|string|email',
        //     'password' => 'required|string'
        // ]);
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]
        )) {
            request()->session()->regenerate();
            return redirect()->route('restaurants.index')->with('success', 'Login successful!');
        }
        return back()->with('error', 'Invalid email or password.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/homepage');
    }
}