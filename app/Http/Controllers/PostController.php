<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function store(Request $r){
        $post = new Post;
        $post->user_id = 1;
        $post->title = $r->title;
        $post->body = $r->body;
        $post->save();
        return redirect('/chatapp');
    }
}
