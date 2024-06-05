<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|string|in:administrateur,demandeur',
        ]);

        if ($data['role'] === 'administrateur') {
            $user = $this->userService->createAdministrateur($data);
        } else {
            $user = $this->userService->createDemandeur($data);
        }

        return response()->json($user, 201);
    }
}
