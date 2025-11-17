<?php

namespace App\Repositories\Interfaces;

use App\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;

interface ArticleRepositoryInterface
{
    public function getAll(int $perPage = 10): LengthAwarePaginator;

    public function getBySlug(string $slug): Article;

    public function create(array $data): Article;

    public function incrementView($slug): void;
}
