<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(
            Post::latest()->paginate(10)
        );
    }

    public function show(Post $post)
    {
        return new PostResource(
            $post->load(['author', 'category', 'comments.user'])
        );
    }
}
