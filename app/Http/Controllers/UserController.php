<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return new UserResource(User::all());
    }
    public function show(Request $request, User $user)
    {

        return new UserResource($user);
    }
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        $user = User::create($validated);
        return new UserResource($user);
    }
    public function update(UpdateUserRequest $request, User $user)
    {
        $validated = $request->validated();
        $user->update($validated);
        return response()->json(['message' => 'User updated successfully',
    "user"=>$user], 201);
    }
    public function destroy(User $user){
        $user ->delete();
        return response()->json(['message' => 'User deleted successfully',
        "user"=>$user], 201);
    }
}
