<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <h1>Post List</h1>
    @foreach($post_list as $post)
    <h4>{{$post->title}}</h4>
    <p>{{$post->description}}</p>
    <a href="{{ url("/post/show/$post->id") }}">View more...</a>
    <hr>
    @endforeach
</body>

</html>