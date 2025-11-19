<?php

namespace App\Repositories\Eloquent;

use App\Models\Level;
use App\Repositories\Interfaces\LevelRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class LevelRepository implements LevelRepositoryInterface
{
    public function getAll(int $perPage = 10): LengthAwarePaginator
    {
        return Level::orderBy('id', 'desc')->paginate($perPage);
    }

    public function getById(int $id): ?Level
    {
        return Level::find($id);
    }

    public function create(array $data): Level
    {
        return Level::create($data);
    }

    public function update(int $id, array $data): Level
    {
        $level = Level::findOrFail($id);
        $level->update($data);

        return $level;
    }

    public function delete(int $id): void
    {
        $this->getById($id)->delete();
    }
}
