<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    public function saveVideoFeedBack(Request $request)
    {
        $post = new Feedback();
        $post->content = $request->input('content');
        $post->user_id = $request->input('user_id');
        $post->video_id = $request->input('video_id');
        $post->save();

        return response()->json(['message' => 'Feedback created successfully'], 201);
    }
}
