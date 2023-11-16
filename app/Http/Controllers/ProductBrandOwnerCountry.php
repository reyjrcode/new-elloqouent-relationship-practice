<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductBrandOwnerCountry extends Controller
{
    //
    public function showdetails($id)
    {
        $product = Products::with('brand', 'country', 'owner')->findOrFail($id);

        return response()->json($product);
    }
}
