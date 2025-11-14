<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Eloquent\UserRepository;

use App\Repositories\Interfaces\RoleRepositoryInterface;
use App\Repositories\Eloquent\RoleRepository;

use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Eloquent\CategoryRepository;

use App\Repositories\Interfaces\LevelRepositoryInterface;
use App\Repositories\Eloquent\LevelRepository;

use App\Repositories\Interfaces\ExerciseRepositoryInterface;
use App\Repositories\Eloquent\ExerciseRepository;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(LevelRepositoryInterface::class, LevelRepository::class);
        $this->app->bind(ExerciseRepositoryInterface::class, ExerciseRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
