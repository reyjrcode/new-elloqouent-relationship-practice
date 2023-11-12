<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //
    public function saveVideo(Request $request)
    {
        $post = new Video();
        $post->title = $request->input('title');
        $post->user_id = $request->input('user_id');
        $post->save();

        return response()->json(['message' => 'Video created successfully'], 201);
    }
}
