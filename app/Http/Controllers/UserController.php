<?php

namespace App\Services; // Capital 'S' in Services

class UserService 
{
    protected $users;

    public function __construct($users = [])
    {
        $this->users = $users;
    }

    public function listUsers()
    {
        return $this->users;
    }

    public function first(UserService $userService) {
        return collect($userService->listUsers())->first();
    }

    public function show(UserService $userService, $id) {
        $user = collect($userService->listUsers())->filter(function ($item) use ($id) {
            return $item['id'] == $id;
        })->first();

        return $user;
    }
}