<?php

namespace App\Services;

use App\Models\Article;
use App\Repositories\Interfaces\ArticleRepositoryInterface;
use App\Services\Interfaces\ArticleServiceInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class ArticleService implements ArticleServiceInterface
{
    protected ArticleRepositoryInterface $articles;

    public function __construct(ArticleRepositoryInterface $articles)
    {
        $this->articles = $articles;
    }

    public function getAll(int $perPage = 10): LengthAwarePaginator
    {
        return $this->articles->getAll($perPage);
    }

    public function getDetail(string $slug): Article
    {
        $this->articles->incrementView($slug);

        return $this->articles->getBySlug($slug);
    }

    public function create(array $data): Article
    {
        return $this->articles->create($data);
    }
}
