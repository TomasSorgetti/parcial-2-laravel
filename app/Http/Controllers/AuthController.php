<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\AuthServiceInterface;

class AuthController extends Controller
{
    // login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request, AuthServiceInterface $service)
    {
        $credentials = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        if ($service->login($credentials)) {
            return redirect()->route('welcome')
                ->with('success', 'Signed in successfully.');
        }

        return back()
            ->withInput()
            ->with('login.error', 'Invalid credentials.');
    }

    // register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request, AuthServiceInterface $service)
    {
        $data = $request->validate([
            'username' => 'required|unique:users,username',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:5',
        ]);

        $service->register($data);

        return redirect()
            ->route('login')
            ->with('success', 'Account created successfully.');
    }

    // verify-email
    public function showVerifyEmail()
    {
        return view('auth.verify-email');
    }

    public function verifyEmail() {}
}
