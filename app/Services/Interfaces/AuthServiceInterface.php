<?php

namespace App\Services\Interfaces;

use App\Models\User;

interface AuthServiceInterface
{
    public function login(array $credentials): ?User;

    public function register(array $data);
}
