<?php

namespace App\Repositories\Interfaces;

use App\Models\Exercise;

interface ExerciseRepositoryInterface
{
    public function findAll(): array;

    public function findById(int $id): ?Exercise;

    public function create(array $data): Exercise;

    public function update(int $id, array $data): Exercise;
}
