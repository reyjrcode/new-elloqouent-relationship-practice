<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VideoFeedBackRateController extends Controller
{
    //
    public function getUserWithVideoFeedBackAndRates(Request $request, $id){
        $user = User::with(['video.feedback', 'video.video_rates',  ])->find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json($user);
    }
}
