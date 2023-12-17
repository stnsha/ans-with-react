<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface
{
    public function getAllUsers();
    public function getUserById($id);
    public function getUserByEmail($email);
    public function createNewUser(array $user);
}
