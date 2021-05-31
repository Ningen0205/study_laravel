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
        <div class="container flex flex-col">
            @foreach($posts as $post)
                @include('components.post_data', ['id' => $post->id, 'title' => $post->title, 'body' => $post->body, 'created_at' => $post->created_at])
            @endforeach

            <form action="{{ url('/chatapp/post')}}" method="post">
            @csrf
                <input type="text" name="title">
                <input type="text" name="body">
                <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" value="送信">
            </form>
        </div>
    </body>
</html>