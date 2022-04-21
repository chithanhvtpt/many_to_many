<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        $post = Post::create($data);
        $post->tags()->attach(['post_id' => $post->id]);
        return response()->json([
            'message' => 'ok',
            'data' => $post
        ]);
    }
}
