<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\CategoryServiceInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(CategoryServiceInterface $categoryService)
    {
        $categories = $categoryService->getAll(5);

        return view("admin.category.list", compact("categories"));
    }

    public function showEdit(CategoryServiceInterface $categoryService, $id)
    {
        $category = $categoryService->getById($id);

        return view("admin.category.edit", compact("category"));
    }

    public function showCreate()
    {
        return view("admin.category.add-new");
    }

    /**
     * todo -> add description
     */
    public function create(Request $request, CategoryServiceInterface $categoryService)
    {
        $data = $request->validate([
            "name" => "required|string|max:255|unique:categories",
            "slug" => "required|string|max:255|unique:categories",
            "description" => "nullable|string|min:10|max:255",
        ]);

        $categoryService->create($data);

        return redirect()->route("admin.categories")
            ->with("success", "Category created successfully.");
    }

    /**
     * todo -> add description
     */
    public function update(Request $request, CategoryServiceInterface $categoryService, $id)
    {
        $data = $request->validate([
            "name"        => "required|string|max:255|unique:categories,name," . $id,
            "slug"        => "required|string|max:255|unique:categories,slug," . $id,
            "description" => "nullable|string|min:10|max:255",
        ]);

        $categoryService->update($id, $data);

        return redirect()->route("admin.categories")
            ->with("success", "Category updated successfully.");
    }

    public function confirmDelete(string $id, CategoryServiceInterface $categoryService)
    {
        $category = $categoryService->getById($id);

        return view("admin.category.confirm-delete", compact("category"));
    }

    /**
     * todo -> fix cascade delete on exercises
     */
    public function delete(string $id, CategoryServiceInterface $categoryService)
    {
        $categoryService->delete($id);

        return redirect()->route("admin.categories")
            ->with("success", "Category deleted successfully.");
    }
}
