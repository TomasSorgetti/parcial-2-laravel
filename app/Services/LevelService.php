<?php

namespace App\Services;

use App\Models\Level;
use App\Repositories\Interfaces\LevelRepositoryInterface;
use App\Services\Interfaces\LevelServiceInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class LevelService implements LevelServiceInterface
{
    protected LevelRepositoryInterface $level;

    public function __construct(LevelRepositoryInterface $level)
    {
        $this->level = $level;
    }

    public function getAll(int $perPage = 10): LengthAwarePaginator
    {
        return $this->level->getAll($perPage);
    }

    public function getById(string $id): ?Level
    {
        return $this->level->getById($id);
    }

    public function create(array $data): ?Level
    {
        return $this->level->create($data);
    }

    public function update(int $id, array $data): ?Level
    {
        return $this->level->update($id, $data);
    }
}
