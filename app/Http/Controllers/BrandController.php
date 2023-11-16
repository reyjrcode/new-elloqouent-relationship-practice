<?php

namespace App\Http\Controllers;

use App\Http\Requests\Brand\StoreBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function storebrand(StoreBrandRequest $request){
        $validated = $request->validated();
        $brand = Brand::create($validated);
        return response()->json(['message' => 'Brand created successfully',
    "info"=>$brand], 201);
    }
}
