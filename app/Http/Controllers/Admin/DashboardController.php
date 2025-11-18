<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(UserServiceInterface $userService)
    {
        $users = $userService->getAll(2);

        return view('admin.dashboard', compact('users'));
    }

    /**
     * todo
     */
    public function softDeleteUser()
    {
        return;
    }
}
