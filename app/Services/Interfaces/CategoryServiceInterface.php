<?php

namespace App\Services\Interfaces;

use App\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;

interface CategoryServiceInterface
{
    public function getAll(int $perPage = 10): LengthAwarePaginator;

    public function getById(string $id): ?Category;

    public function create(array $data): ?Category;

    public function update(int $id, array $data): ?Category;

    public function delete(int $id): void;
}
