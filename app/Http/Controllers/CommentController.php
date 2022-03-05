<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create($post_id, Request $request)
    {
        $post = Post::find($post_id);
        if (!$post) {
            echo "post id not found";
            return true;
        }
        $comment = new Comment();

        //this is for easy use
        // $comment->post_id = $post_id;

        // this is for better use(one-many relation)
        $comment->post()->associate($post);
        $comment->comment_body = $request->comment_body;
        $comment->save();
        echo "Comment added successfully";
    }
}
