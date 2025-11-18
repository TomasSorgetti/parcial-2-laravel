<?php

namespace App\Services\Interfaces;

use App\Models\Exercise;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface ExerciseServiceInterface
{
    public function getAll(int $perPage = 10): LengthAwarePaginator;
}
