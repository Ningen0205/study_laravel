<?php
$posts = App\Models\Post::get();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>chatapp</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <h1>ChatApp</h1>
        @foreach($posts as $post)
            @include('components.post_data', ['id' => $post->id, 'title' => $post->title, 'body' => $post->body, 'created_at' => $post->created_at])
        @endforeach

        <form action="{{ url('/chatapp/post')}}" method="post">
        @csrf
            <input type="text" name="title">
            <input type="text" name="body">
            <input type="submit" value="送信">
        </form>
    </body>
</html>