<?php

namespace App\Http\Controllers;

use App\Models\VideoRate;
use Illuminate\Http\Request;

class VideoRateController extends Controller
{
    //
   
    public function saveVideoRate(Request $request)
    {
        $post = new VideoRate();
        $post->rating = $request->input('rating');
        $post->user_id = $request->input('user_id');
        $post->video_id = $request->input('video_id');
        $post->save();

        return response()->json(['message' => 'Rate created successfully'], 201);
    }

    
}
