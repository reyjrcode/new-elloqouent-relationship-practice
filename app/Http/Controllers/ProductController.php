<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    // public function saveproduct(StoreProductRequest $request){
    //     $validated = $request->validated();
    //     $product = Product::create($validated);
    //     return response()->json(['message' => 'Product created successfully',
    //     "info"=>$product], 201);
    // }
    public function saveproduct(Request $request)
    {
        // Validate and store the product
        $product = Product::create($request->all());

        // Attach owners to the product
        if ($request->has('owner_ids')) {
            $product->owners()->attach($request->input('owner_ids'));
        }

        return response()->json(['product' => $product], 201);
    }
}
