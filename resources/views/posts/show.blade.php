<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Post Details</h1>
    <hr>
    <h3>{{$post->title}}</h3>
    <p>{{$post->description}}</p>
    <hr>
    <h4>Comments</h4>
    <ul>
        @foreach ($post->comments as $comment)
        <li>{{$comment->comment_body}}</li>
        @endforeach
    </ul>
    <hr>
    <h4>Add New Comment</h4>
    <form action="{{url("/comment/create/$post->id")}}" method="post">
        @csrf
        <input type="text" name="comment_body">
        <input type="submit" name="save" value="Add Comment">
    </form>
</body>

</html>