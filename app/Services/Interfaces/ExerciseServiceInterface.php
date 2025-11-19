<?php

namespace App\Services\Interfaces;

use App\Models\Exercise;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface ExerciseServiceInterface
{
    public function getAll(int $perPage = 10): LengthAwarePaginator;

    public function getAllByCategoryId(string $categoryId, int $perPage = 10): LengthAwarePaginator;

    public function getAllBySlug(string $slug, int $perPage = 10): LengthAwarePaginator;

    public function getOneById(string $exerciseId): ?Exercise;

    public function getOneBySlug(string $slug): ?Exercise;

    public function create(array $data): ?Exercise;

    public function update(string $id, array $data): ?Exercise;
}
