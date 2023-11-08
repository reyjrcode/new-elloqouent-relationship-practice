<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return new UserResource(User::all());
    }
    public function show(Request $request,User $user){

        return new UserResource($user);
    }
    public function store(StoreUserRequest $request){
     $validated = $request->validated();
     $user = User::create($validated);
     return new UserResource($user);
    }
}
