<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Resources\PostResource;

class PostController extends BaseController
{
    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }

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
