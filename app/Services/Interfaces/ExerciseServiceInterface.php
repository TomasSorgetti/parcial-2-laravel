<?php

namespace App\Services\Interfaces;

use App\Models\Exercise;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface ExerciseServiceInterface
{
    public function getAll(string $categoryId, int $perPage = 10): LengthAwarePaginator;

    public function getAllBySlug(string $slug, int $perPage = 10): LengthAwarePaginator;

    public function getOneById(string $exerciseId): ?Exercise;

    public function getOneBySlug(string $slug): ?Exercise;
}
