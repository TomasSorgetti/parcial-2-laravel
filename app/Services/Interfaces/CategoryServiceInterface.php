<?php

namespace App\Services\Interfaces;

use Illuminate\Support\Collection;

interface CategoryServiceInterface
{
    public function getAll(): Collection;
}
