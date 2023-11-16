<?php

namespace App\Http\Controllers;

use App\Http\Requests\Country\StoreCountryRequest;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //
    public function savecountry(StoreCountryRequest $request){
        $validated = $request->validated();
        $country = Country::create($validated);
        return response()->json(['message' => 'Country created successfully',
        "info"=>$country], 201);
    }
}
