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
}