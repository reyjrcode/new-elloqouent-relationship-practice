<?php

namespace App\Http\Controllers;

use App\Http\Requests\Roles\StoreRolesRequest;
use App\Http\Resources\RolesResource;
use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    //
    public function store(StoreRolesRequest $request)
    {
        $validated = $request->validated();
        $roles = Roles::create($validated);
        return new RolesResource($roles);
    }
}
