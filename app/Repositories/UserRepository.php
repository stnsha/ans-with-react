<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function getUserById($id)
    {
        $user = User::find($id);
        if ($user) {
            return $user;
        } else {
            return 'User not found';
        }
    }

    public function getUserByEmail($email)
    {
        $user = User::where('email', $email)->first();
        if ($user) {
            return $user;
        } else {
            return 'Email not found';
        }
    }
    public function createNewUser(array $user)
    {
        return
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
            ]);
    }
}
