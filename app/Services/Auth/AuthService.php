<?php

namespace App\Services\Auth;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\RoleRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Services\Interfaces\AuthServiceInterface;

class AuthService implements AuthServiceInterface
{
    protected UserRepositoryInterface $users;
    protected RoleRepositoryInterface $roles;

    public function __construct(
        UserRepositoryInterface $users,
        RoleRepositoryInterface $roles
    ) {
        $this->users = $users;
        $this->roles = $roles;
    }

    public function login(array $credentials): bool
    {
        return Auth::attempt($credentials);
    }

    public function register(array $data)
    {
        $studentRole = $this->roles->findByName('student');

        return $this->users->create([
            'username' => $data['username'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id'  => $studentRole->id,
        ]);
    }
}
