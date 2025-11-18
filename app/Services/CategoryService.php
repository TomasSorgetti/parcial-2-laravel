<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Services\Interfaces\CategoryServiceInterface;
use Illuminate\Support\Collection;

class CategoryService implements CategoryServiceInterface
{
    protected CategoryRepositoryInterface $category;

    public function __construct(CategoryRepositoryInterface $category)
    {
        $this->category = $category;
    }

    public function getAll(): Collection
    {
        return $this->category->getAll();
    }
}
