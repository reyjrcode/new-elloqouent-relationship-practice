<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductBrandOwnerCountry extends Controller
{
    //
    
    public function completeDetails($id)
    {
        $product = Product::with(['brand.country', 'owners'])->find($id);

        return response()->json(['product' => $product]);
    }
}
