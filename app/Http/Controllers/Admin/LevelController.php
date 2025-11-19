<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\LevelServiceInterface;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function show(LevelServiceInterface $levelService)
    {
        $levels = $levelService->getAll(5);

        return view("admin.level.list", compact("levels"));
    }

    public function showEdit($id, LevelServiceInterface $levelService)
    {
        $level = $levelService->getById($id);

        return view("admin.level.edit", compact("level"));
    }

    public function showCreate()
    {
        return view("admin.level.add-new");
    }

    public function create(Request $request, LevelServiceInterface $levelService)
    {
        $data = $request->validate([
            "name"        => "required|string|max:255|unique:levels",
            "exam_board"  => "required|string|max:255",
        ]);

        $levelService->create($data);

        return redirect()->route("admin.levels")
            ->with("success", "Level created successfully.");
    }

    public function update(Request $request, LevelServiceInterface $levelService, $id)
    {
        $data = $request->validate([
            "name"        => "required|string|max:255|unique:levels,name," . $id,
            "exam_board"  => "required|string|max:255,exam_board," . $id,
        ]);

        $levelService->update($id, $data);

        return redirect()->route("admin.levels")
            ->with("success", "Level created successfully.");
    }

    public function confirmDelete(string $id, LevelServiceInterface $levelService)
    {
        $level = $levelService->getById($id);

        return view("admin.level.confirm-delete", compact("level"));
    }

    /**
     * todo -> fix cascade delete on exercises
     */
    public function delete(string $id, LevelServiceInterface $levelService)
    {
        $levelService->delete($id);

        return redirect()->route("admin.levels")
            ->with("success", "Level deleted successfully.");
    }
}
