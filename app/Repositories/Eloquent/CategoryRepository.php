<?php

namespace App\Repositories\Eloquent;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function getAll($perPage = 10): LengthAwarePaginator
    {
        return Category::withCount("exercises")
            ->orderBy("id", "desc")
            ->paginate($perPage);
    }


    public function getById(int $id): ?Category
    {
        return Category::find($id);
    }

    public function create(array $data): Category
    {
        return Category::create($data);
    }

    public function update(int $id, array $data): Category
    {
        $category = Category::findOrFail($id);
        $category->update($data);

        return $category;
    }

    public function delete(int $id): void
    {
        $this->getById($id)->delete();
    }
}
