<?php

namespace App\Repositories\Interfaces;

use App\Models\Level;
use Illuminate\Pagination\LengthAwarePaginator;

interface LevelRepositoryInterface
{
    public function getAll(int $perPage = 10): LengthAwarePaginator;

    public function getById(int $id): ?Level;

    public function create(array $data): Level;

    public function update(int $id, array $data): Level;

    public function delete(int $id): void;
}
