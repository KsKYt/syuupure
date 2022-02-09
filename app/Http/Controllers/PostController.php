<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function create()
    {
        return view('post/create');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('post.create');
    }
}
