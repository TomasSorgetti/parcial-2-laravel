<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Level;
use App\Services\Interfaces\ExerciseServiceInterface;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function show(ExerciseServiceInterface $exerciseService)
    {
        $exercises = $exerciseService->getAll(5);

        return view("admin.exercise.list", compact("exercises"));
    }

    public function showEdit(ExerciseServiceInterface $exerciseService, string $id)
    {
        $exercise = $exerciseService->getOneById($id);

        // todo -> service this
        $categories = Category::all();
        $levels = Level::all();

        return view("admin.exercise.edit", compact("exercise", "categories", "levels"));
    }

    public function showCreate()
    {
        // todo -> service this
        $categories = Category::all();
        $levels = Level::all();

        return view("admin.exercise.add-new", compact("categories", "levels"));
    }

    public function create(Request $request, ExerciseServiceInterface $exerciseService)
    {
        $data = $request->validate([
            "title" => "required|string|max:255",
            "slug" => "required|string|max:255|unique:exercises",
            "statement" => "required|string",
            "solution" => "required|string",
            "difficulty" => "required|in:easy,medium,hard",
            "exam_board" => "required|in:IB,IGCSE",
            "category_id" => "required|exists:categories,id",
            "level_id" => "required|exists:levels,id",
            "price" => "required|numeric|min:0",
            "is_published" => "nullable|boolean",
            "image" => "nullable|image|max:2048",
        ]);

        // todo -> handle image
        if ($request->hasFile("image")) {
            $data["image"] = $request->file("image")->store("exercises", "public");
        }

        $exerciseService->create($data);

        return redirect()->route("admin.exercises")
            ->with("success", "Exercise created successfully.");
    }

    public function update(string $id, Request $request, ExerciseServiceInterface $exerciseService)
    {
        $data = $request->validate([
            "title" => "required|string|max:255",
            "slug" => "required|string|max:255|unique:exercises,slug," . $id,
            "statement" => "required|string",
            "solution" => "required|string",
            "difficulty" => "required|in:easy,medium,hard",
            "exam_board" => "required|in:IB,IGCSE",
            "category_id" => "required|exists:categories,id",
            "level_id" => "required|exists:levels,id",
            "price" => "required|numeric|min:0",
            "is_published" => "nullable|boolean",
            "image" => "nullable|image|max:2048",
        ]);

        // todo -> handle image
        if ($request->hasFile("image")) {
            $data["image"] = $request->file("image")->store("exercises", "public");
        }

        $exerciseService->update($id, $data);

        return redirect()->route("admin.exercises")
            ->with("success", "Exercise updated successfully.");
    }

    public function confirmDelete(string $id, ExerciseServiceInterface $exerciseService)
    {
        $exercise = $exerciseService->getOneById($id);

        return view("admin.exercise.confirm-delete", compact("exercise"));
    }

    public function delete(string $id, ExerciseServiceInterface $exerciseService)
    {
        $exerciseService->delete($id);

        return redirect()->route("admin.exercises")
            ->with("success", "Exercise deleted successfully.");
    }
}
