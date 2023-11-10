<?php

namespace App\Http\Controllers;

use App\Http\Requests\Roles\StoreUserWithRolesRequest;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;

class OneToMannyController extends Controller
{

    public function store(Request $request)
    {
        $user = User::create($request->input('user_data'));
        $user->roles()->sync($request->input('role_ids'));
        
        // Retrieve the full details of the roles associated with the user
        $userRoles = $user->roles;

        return response()->json(['message' => 'User created with roles', 'user_roles' => $userRoles]);
    }
    public function getUsersWithRoles($userId)
    {
        $user = User::with('roles')->find($userId);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        return response()->json($user);
    }
}