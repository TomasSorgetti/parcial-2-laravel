<?php

namespace App\Services;

use App\Models\Category;
use App\Models\User;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Services\Interfaces\CategoryServiceInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class CategoryService implements CategoryServiceInterface
{
    protected CategoryRepositoryInterface $category;

    public function __construct(CategoryRepositoryInterface $category)
    {
        $this->category = $category;
    }

    public function getAll(int $perPage = 10): LengthAwarePaginator
    {
        return $this->category->getAll($perPage);
    }

    public function getById(string $id): ?Category
    {
        return $this->category->getById($id);
    }

    public function create(array $data): ?Category
    {
        return $this->category->create($data);
    }

    public function update(int $id, array $data): ?Category
    {
        return $this->category->update($id, $data);
    }

    public function delete(int $id): void
    {
        $this->category->delete($id);
    }
}
