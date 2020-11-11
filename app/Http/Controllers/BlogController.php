<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Post $post)
    {
        $posts = $post->orderBy('created_at', 'desc')->get();
        return view('blog', compact('posts'));
    }
}
