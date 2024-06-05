<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function createUser(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return User::create($data);
    }

    public function createAdministrateur(array $data)
    {
        $data['role'] = 'administrateur';
        return $this->createUser($data);
    }

    public function createDemandeur(array $data)
    {
        $data['role'] = 'demandeur';
        return $this->createUser($data);
    }
}
