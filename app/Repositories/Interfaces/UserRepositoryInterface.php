<?php

namespace App\Repositories\Interfaces;

use App\Models\User;

interface UserRepositoryInterface
{
    public function findAll(): array;

    public function findById(int $id): ?User;

    public function create(array $data): User;

    public function update(int $id, array $data): User;
}
