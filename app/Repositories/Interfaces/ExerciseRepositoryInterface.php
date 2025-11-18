<?php

namespace App\Repositories\Interfaces;

use App\Models\Exercise;
use Illuminate\Pagination\LengthAwarePaginator;

interface ExerciseRepositoryInterface
{
    public function getAll(int $perPage = 10): LengthAwarePaginator;

    public function getAllByCategoryId(string $categoryId, int $perPage = 10): LengthAwarePaginator;

    public function getAllByCategorySlug(string $slug, int $perPage = 10): LengthAwarePaginator;

    public function getOneBySlug(string $slug): ?Exercise;

    public function getById(int $id): ?Exercise;

    public function create(array $data): Exercise;

    public function update(int $id, array $data): Exercise;
}
