<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\CategoryServiceInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(CategoryServiceInterface $categoryService)
    {
        $categories = $categoryService->getAll();

        return view('dashboard/welcome', compact('categories'));
    }
}
