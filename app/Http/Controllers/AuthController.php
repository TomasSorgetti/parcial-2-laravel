<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\AuthServiceInterface;
use Illuminate\Support\Facades\Auth;

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

        $user = $service->login($credentials);

        if ($user) {
            if ($user->role && $user->role->name === 'admin') {
                return redirect()->route('admin.dashboard')
                    ->with('success', 'Signed in successfully as admin.');
            }

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

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login');
    }
}
