<?php

namespace App\Repositories\Interfaces;

use App\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface CategoryRepositoryInterface
{
    public function getAll($perPage = 10): LengthAwarePaginator;

    public function getById(int $id): ?Category;

    public function create(array $data): Category;

    public function update(int $id, array $data): Category;
}
