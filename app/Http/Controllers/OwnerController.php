<?php

namespace App\Http\Controllers;

use App\Http\Requests\Owner\StoreOwnerRequest;
use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    //
    public function storeowner(StoreOwnerRequest $request){
        $validated = $request->validated();
        $owner = Owner::create($validated);
        return response()->json(['message' => 'Owner created successfully',
        "info"=>$owner], 201);    }
}
