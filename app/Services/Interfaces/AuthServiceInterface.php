<?php

namespace App\Services\Interfaces;

interface AuthServiceInterface
{
    public function login(array $credentials): bool;

    public function register(array $data);
}
