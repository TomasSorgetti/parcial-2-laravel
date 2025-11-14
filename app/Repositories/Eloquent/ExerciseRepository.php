<?php

namespace App\Repositories\Eloquent;

use App\Models\Exercise;
use App\Repositories\Interfaces\ExerciseRepositoryInterface;

class ExerciseRepository implements ExerciseRepositoryInterface
{
    public function findAll(): array
    {
        return Exercise::all()->toArray();
    }

    public function findById(int $id): ?Exercise
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
