<?php

namespace App\Repositories\Eloquent;

use App\Models\Level;
use App\Repositories\Interfaces\LevelRepositoryInterface;

class LevelRepository implements LevelRepositoryInterface
{
    public function findAll(): array
    {
        return Level::all()->toArray();
    }

    public function findById(int $id): ?Level
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
}
