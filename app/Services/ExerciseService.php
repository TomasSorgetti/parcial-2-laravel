<?php

namespace App\Services;

use App\Models\Exercise;
use App\Repositories\Interfaces\ExerciseRepositoryInterface;
use App\Services\Interfaces\ExerciseServiceInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ExerciseService implements ExerciseServiceInterface
{
    protected ExerciseRepositoryInterface $exercise;

    public function __construct(ExerciseRepositoryInterface $exercise)
    {
        $this->exercise = $exercise;
    }

    public function getAll(int $perPage = 10): LengthAwarePaginator
    {
        return $this->exercise->getAll($perPage);
    }

    public function getAllByCategoryId(string $categoryId, int $perPage = 10): LengthAwarePaginator
    {
        return $this->exercise->getAllByCategoryId($categoryId, $perPage);
    }

    public function getAllBySlug(string $slug, int $perPage = 10): LengthAwarePaginator
    {
        return $this->exercise->getAllByCategorySlug($slug, $perPage);
    }

    public function getOneBySlug(string $slug): ?Exercise
    {
        return $this->exercise->getOneBySlug($slug);
    }

    public function getOneById(string $exerciseId): ?Exercise
    {
        return $this->exercise->getById($exerciseId);
    }

    public function create(array $data): ?Exercise
    {
        return $this->exercise->create($data);
    }

    public function update(string $id, array $data): ?Exercise
    {
        return $this->exercise->update($id, $data);
    }
}
