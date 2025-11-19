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
        $articles = $articleService->getAll(5);
        return view("admin.blog.list", compact("articles"));
    }

    public function showAddNew()
    {
        return view("admin.blog.add-new");
    }

    public function showEdit(ArticleServiceInterface $articleService)
    {
        $id = request("id");
        $article = $articleService->getById($id);

        return view("admin.blog.edit", compact("article"));
    }

    /**
     * todo -> refactor a service y repository
     */
    public function save(Request $request, ArticleServiceInterface $articleService)
    {
        $data = $request->validate([
            "title" => "required|string|max:255",
            "slug" => "required|string|max:255|unique:articles",
            "summary" => "nullable|string|min:10|max:100",
            "content" => "required|string|min:100",
            "image" => "required|image|max:2048",
        ]);

        // todo -> reemplazar cuando use un editor de texto
        $data["content"] = trim(strip_tags($data["content"]));

        $storedImage = null;

        /**
         * Todo-> refactor al service
         */
        try {
            if ($request->hasFile("image")) {
                $storedImage = $request->file("image")->store("articles", "public");
                $data["image"] = "/storage/" . $storedImage;
            }

            $articleService->create($data);

            return redirect()->route("admin.blog")
                ->with("success", "Blog post created successfully.");
        } catch (\Throwable $e) {
            if ($storedImage && Storage::disk("public")->exists($storedImage)) {
                Storage::disk("public")->delete($storedImage);
            }
            return back()->withErrors("Something went wrong.");
        }
    }

    public function update(Request $request, ArticleServiceInterface $articleService, $id)
    {
        $article = $articleService->getById($id);

        $data = $request->validate([
            "title" => "required|string|max:255|unique:articles,title," . $id,
            "slug" => "required|string|max:255|unique:articles,slug," . $id,
            "summary" => "nullable|string|min:10|max:100",
            "content" => "required|string|min:100",
            "image" => "nullable|image|max:2048",
        ]);

        $prevImage = $article->image;
        $newImage = null;

        /**
         * Todo-> refactor al service
         */
        try {
            // todo -> reemplazar cuando use un editor de texto
            $data["content"] = trim(strip_tags($data["content"]));

            if ($request->hasFile('image')) {

                $newImage = $request->file('image')->store('articles', 'public');
                $data['image'] = '/storage/' . $newImage;

                // !important, borra la img anterior
                if ($prevImage && Storage::disk('public')->exists(str_replace('/storage/', '', $prevImage))) {
                    Storage::disk('public')->delete(str_replace('/storage/', '', $prevImage));
                }
            }

            $articleService->update($id, $data);

            return redirect()->route("admin.blog")
                ->with("success", "Article updated successfully.");
        } catch (\Throwable $e) {

            // !important si fallo el update, borra la imagen nueva
            if ($newImage && Storage::disk("public")->exists($newImage)) {
                Storage::disk("public")->delete($newImage);
            }

            return back()->withErrors("Something went wrong.");
        }
    }


    public function confirmDelete(string $id, ArticleServiceInterface $articleService)
    {
        $article = $articleService->getById($id);

        return view("admin.article.confirm-delete", compact("article"));
    }

    public function delete(string $id, ArticleServiceInterface $articleService)
    {
        $articleService->delete($id);

        return redirect()->route("admin.blog")
            ->with("success", "Article deleted successfully.");
    }
}
