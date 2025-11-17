<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\ArticleServiceInterface;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show(ArticleServiceInterface $articles)
    {
        $articles = $articles->getAll(2);
        return view('admin.blog.list', compact('articles'));
    }

    public function showAddNew()
    {
        return view('admin.blog.add-new');
    }

    /**
     * todo -> refactor a service y repository
     */
    public function save(Request $request, ArticleServiceInterface $articleService)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:articles',
            'summary' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('articles', 'public');
        }

        $articleService->create($data);

        return redirect()->route('admin.blog')
            ->with('success', 'Blog post created successfully.');
    }
}
