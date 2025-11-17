<?php

namespace App\Providers;

use App\Repositories\Eloquent\ArticleRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

// repositories
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
use App\Repositories\Interfaces\ArticleRepositoryInterface;

// services
use App\Services\Interfaces\AuthServiceInterface;
use App\Services\Interfaces\UserServiceInterface;
use App\Services\Interfaces\ArticleServiceInterface;
use App\Services\AuthService;
use App\Services\UserService;
use App\Services\ArticleService;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // repositories
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(LevelRepositoryInterface::class, LevelRepository::class);
        $this->app->bind(ExerciseRepositoryInterface::class, ExerciseRepository::class);
        $this->app->bind(ArticleRepositoryInterface::class, ArticleRepository::class);

        // services
        $this->app->bind(AuthServiceInterface::class, AuthService::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(ArticleServiceInterface::class, ArticleService::class);
    }

    public function boot(): void
    {
        // por algun motivo no funciona (?)
        Paginator::useTailwind();
    }
}
