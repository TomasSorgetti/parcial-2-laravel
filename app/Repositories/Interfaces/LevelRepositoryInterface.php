<?php

namespace App\Repositories\Interfaces;

use App\Models\Level;

interface LevelRepositoryInterface
{
    public function findAll(): array;

    public function findById(int $id): ?Level;

    public function create(array $data): Level;

    public function update(int $id, array $data): Level;
}
