<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComment;

class CommentsController extends Controller
{
    
    public function store(StoreComment $request, Post $post)
    {
        Comment::create([
            'name' => request('name'),
            'body' => request('body'),
            'post_id' => $post->id
        ]);

        return back();
    }
}
