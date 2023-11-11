<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    //
    public function saverate(Request $request){
        $rate = new Rate();
        $rate->user_id = $request->input('user_id');
        $rate->post_id = $request->input('post_id');
        $rate->rating = $request->input('rating');
        $rate->save();

        return response()->json(['message' => 'Rate created successfully'], 201);
    }
 
}
