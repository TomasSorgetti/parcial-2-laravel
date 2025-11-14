<?php

namespace App\Repositories\Interfaces;

use App\Models\Role;

interface RoleRepositoryInterface
{
    public function findAll(): array;

    public function findById(int $id): ?Role;

    public function create(array $data): Role;

    public function update(int $id, array $data): Role;
}
