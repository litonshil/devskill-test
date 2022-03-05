<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store()
    {
        $post = new Post();
        $post->title = "New Post Title Entry";
        $post->description = "New Post Description";
        $post->is_active = true;
        $post->save();
        $post->tags()->attach([1, 2]); //save at pivot table posts_tag

        //for delete with foreign key's table column
        // $post = Post::find(9);
        // $post->tags()->detach(); // opposite of attach()
        // $post->delete();
    }
    public function create()
    {
        $post = new Post();
        $post->title = "Demo Title";
        $post->description = "Demo Description";
        $post->is_active = true;
        $post->save();



        //Mass Assignment => must be filled up fillable array at Model
        // $data = [
        //     "title" => "Demo Title",
        //     "description" => "Demo Description",
        //     "is_active" => true,
        // ];
        // Post::create($data);
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
            echo ",";
            echo $val->description;
            echo "<br> ==============================";
        }
    }
    public function show($post_id)
    {
        $post = Post::find($post_id);
        if (!$post) {
            return redirect('/home');
        }
        $data['post'] = $post;
        return view('posts.show', $data);
    }
}
