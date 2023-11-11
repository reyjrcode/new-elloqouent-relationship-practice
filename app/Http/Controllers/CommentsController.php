<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //
    public function savecomment(Request $request){
        $comment = new Comments();
        $comment->user_id = $request->input('user_id');
        $comment->post_id = $request->input('post_id');
        $comment->content = $request->input('content');
        $comment->save();

        return response()->json(['message' => 'Comment created successfully'], 201);
    }
}
