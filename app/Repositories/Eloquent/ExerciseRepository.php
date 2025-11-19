<?php

namespace App\Repositories\Eloquent;

use App\Models\Exercise;
use App\Repositories\Interfaces\ExerciseRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class ExerciseRepository implements ExerciseRepositoryInterface
{
    public function getAll($perPage = 10): LengthAwarePaginator
    {
        return Exercise::orderBy('id', 'desc')->paginate($perPage);
    }

    public function getAllByCategoryId(string $categoryId, $perPage = 10): LengthAwarePaginator
    {
        return Exercise::where('category_id', $categoryId)->orderBy('id', 'desc')->paginate($perPage);
    }

    public function getAllByCategorySlug(string $slug, int $perPage = 10): LengthAwarePaginator
    {
        return Exercise::whereHas('category', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })
            ->orderBy('id', 'desc')
            ->paginate($perPage);
    }

    public function getOneBySlug(string $slug): ?Exercise
    {
        return Exercise::where('slug', $slug)->first();
    }

    public function getById(int $id): ?Exercise
    {
        return Exercise::find($id);
    }

    public function create(array $data): Exercise
    {
        return Exercise::create($data);
    }

    public function update(int $id, array $data): Exercise
    {
        $exercise = Exercise::findOrFail($id);
        $exercise->update($data);

        return $exercise;
    }

    public function delete(int $id): void
    {
        $this->getById($id)->delete();
    }
}
