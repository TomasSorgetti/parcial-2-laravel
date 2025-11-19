<?php

namespace App\Services\Interfaces;

use App\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;

interface ArticleServiceInterface
{
    public function getAll(int $perPage = 10): LengthAwarePaginator;

    public function getById(string $id): Article;

    public function getDetail(string $slug): Article;

    public function create(array $data): Article;

    public function delete(int $id): void;
}
