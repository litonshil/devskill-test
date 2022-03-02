<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        // $post = new Post();
        // $post->title = "Demo Title";
        // $post->description = "Demo Description";
        // $post->is_active = true;
        // $post->save();

        //Mass Assignment => must be filled up fillable array at Model
        $data = [
            "title" => "Demo Title",
            "description" => "Demo Description",
            "is_active" => true,
        ];
        Post::create($data);
    }
    public function update($id)
    {
        // $post = Post::find($id);
        // if ($post) {
        //     $post->title = "Demo Title 3";
        //     $post->description = "Demo Description 3";
        //     $post->save();
        // } else {
        //     echo 'No data found';
        // }

        //mass update
        $data = [
            "title" => "Demo Title update",
            "description" => "Demo Description update",
            "is_active" => true,
        ];

        $post = Post::find($id);

        if ($post) {
            $post->update($data);
            echo "updated!";
        } else {
            echo "data not found";
        }
    }
    public function delete($id)
    {
        // $post = Post::find($id);
        // if ($post) {
        //     $post->delete();
        //     echo "data deleted";
        // } else {
        //     echo 'No data found';
        // }


        Post::destroy($id);
    }

    public function display()
    {
        $posts = Post::get();
        foreach ($posts as $val) {
            echo $val->title;
            echo "<br/>";
            echo $val->description;
            echo "<br/>";
        }
    }
}
