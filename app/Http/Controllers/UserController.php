<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile()
    {

        return view("account.profile");
    }
}
