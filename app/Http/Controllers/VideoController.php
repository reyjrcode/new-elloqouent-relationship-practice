<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //
    public function saveVideo(StoreVideoRequest $request)
    {
        // $post = new Video();
        // $post->title = $request->input('title');
        // $post->user_id = $request->input('user_id');
        // $post->save();
    $validated = $request->validated();
    $video= Video::create($validated); 
    return response()->json(['message' => 'Video created successfully',
    "info"=>$video], 201);
    }
}
