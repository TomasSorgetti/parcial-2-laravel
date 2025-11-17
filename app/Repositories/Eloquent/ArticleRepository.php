<?php

namespace App\Repositories\Eloquent;

use App\Models\Article;
use App\Repositories\Interfaces\ArticleRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function getAll(int $perPage = 10): LengthAwarePaginator
    {
        return Article::orderBy('id', 'desc')->paginate($perPage);
    }

    public function getById(string $id): Article
    {
        return Article::where('id', $id)->firstOrFail();
    }

    public function getBySlug(string $slug): Article
    {
        return Article::where('slug', $slug)->firstOrFail();
    }

    public function create(array $data): Article
    {
        return Article::create($data);
    }

    public function incrementView(string $slug): void
    {
        $article = Article::where('slug', $slug)->first();

        if ($article) {
            $article->increment('views');
        }
    }
}
