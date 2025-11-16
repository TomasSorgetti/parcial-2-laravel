<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function show403()
    {
        return view('error.403');
    }

    public function show404()
    {
        return view('error.404');
    }
}
