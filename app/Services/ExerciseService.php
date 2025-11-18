<?php

namespace App\Services;

use App\Models\User;
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
}
