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
}
