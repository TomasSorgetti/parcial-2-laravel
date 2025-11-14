<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login() {}

    // register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register() {}

    // verify-email
    public function showVerifyEmail()
    {
        return view('auth.verify-email');
    }

    public function verifyEmail() {}
}
