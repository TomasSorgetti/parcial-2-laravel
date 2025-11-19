<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\ArticleServiceInterface;

class BlogController extends Controller
{
    public function show(ArticleServiceInterface $articleService)
    {
        $articles = $articleService->getAll(10);

        return view("blog", compact("articles"));
    }

    public function showDetail(ArticleServiceInterface $articleService)
    {
        $slug = request("slug");

        $article = $articleService->getDetail($slug);

        return view("blog-detail", compact("article"));
    }
}
