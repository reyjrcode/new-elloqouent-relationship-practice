<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\StoreProfileRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function store(StoreProfileRequest $request)
    {
        $validated = $request->validated();
        $profile = Profile::create($validated);
        return response()->json([
            'message' => 'Profile save successfully',
            "user information" => $profile
        ], 201);
    }

public function getUserRoles($id)
{
    $user = User::with('profile')->find($id);

    // if (!$user) {
    //     return response()->json(['message' => 'User not found'], 404);
    // }
    // $userRoles = $user->roles->map(function ($role) {
    //     return [
    //         'email' => $role->email,
    //         'name' => $role->name,
    //     ];
    // });
    // return response()->json(['user_roles' => $userRoles]);


    if (!$user) {
        return response()->json(['message' => 'User not found'], 404);
    }

    return response()->json(['user' => $user]);
}
}
