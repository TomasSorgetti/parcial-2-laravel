<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\ArticleServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function show(ArticleServiceInterface $articleService)
    {
        $articles = $articleService->getAll(2);
        return view('admin.blog.list', compact('articles'));
    }

    public function showAddNew()
    {
        return view('admin.blog.add-new');
    }

    public function showEdit(ArticleServiceInterface $articleService)
    {
        $slug = request('slug');
        $article = $articleService->getDetail($slug);

        return view('admin.blog.edit', compact('article'));
    }

    /**
     * todo -> refactor a service y repository
     */
    public function save(Request $request, ArticleServiceInterface $articleService)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:articles',
            'summary' => 'nullable|string|min:10|max:255',
            'content' => 'required|string|min:100',
            'image' => 'required|image|max:2048',
        ]);

        // todo -> reemplazar cuando use un editor de texto
        $data['content'] = trim(strip_tags($data['content']));


        $storedImage = null;

        try {
            if ($request->hasFile('image')) {
                $storedImage = $request->file('image')->store('articles', 'public');
                $data['image'] = "/storage/" . $storedImage;
            }

            $articleService->create($data);

            return redirect()->route('admin.blog')
                ->with('success', 'Blog post created successfully.');
        } catch (\Throwable $e) {
            if ($storedImage && Storage::disk('public')->exists($storedImage)) {
                Storage::disk('public')->delete($storedImage);
            }
            return back()->withErrors('Something went wrong.');
        }
    }
}
