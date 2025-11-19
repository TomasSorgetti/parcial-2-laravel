<?php

namespace App\Repositories\Interfaces;

use App\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;

interface ArticleRepositoryInterface
{
    public function getAll(int $perPage = 10): LengthAwarePaginator;

    public function getBySlug(string $slug): Article;

    // deberia ser int id?
    public function getById(string $id): Article;

    public function create(array $data): Article;

    public function incrementView(string $slug): void;

    public function delete(string $id): void;
}
